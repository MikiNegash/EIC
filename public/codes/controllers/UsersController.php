<?php

namespace App\Http\Controllers\Actor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Actor\Role;
use App\Models\Actor\Permission;
use App\Models\Actor\PermissionGroup;
use App\Models\Actor\User;
use Illuminate\Support\Facades\Validator;
use DataTables;
use Illuminate\Support\Facades\Hash;
class UsersController extends Controller
{
    function view_users(Request $request)
    {
        if(!Auth::user() || !Auth::user()->hasPermissionWithName("view_users"))
        {
            return "";
        }
        return view("basic.users");
    }
    function load_users(Request $request)
    {
        if(!Auth::user() || !Auth::user()->hasPermissionWithName("view_users"))
        {
            return "";
        }

        $data = User::latest()->where('user_type','user')->orderBy("name","ASC")->get();

        return DataTables::of($data)
            ->addIndexColumn()

            ->addColumn('name', function($row){
                if($row->UserImage && $row->UserImage->approved_photo)
                {
                    return '<table><tr><td style="padding:0px"><img class="rounded-circle circle-img" alt="avatar1" src="'.url($row->UserImage->approved_photo).'" /> </td><td style="padding:0px;padding-left:15px">'.$row->name.'</td></tr></table>';

                }
                else{
                    return '<table><tr><td style="padding:0px"><img class="rounded-circle circle-img" alt="avatar1" src="'.asset("/assets/avatar.jpg").'" /> </td><td style="padding:0px;padding-left:15px">'.$row->name.'</td></tr></table>';

                }
             })
            ->addColumn('roles', function($row){
               $html="<table>";
               $count=0;
               foreach($row->roles as $role)
               {
                    $remove_role_link="";
                    if(Auth::user()->hasPermissionWithName("remove_user_role"))
                    {
                        $remove_role_link="onclick='remove_usert_role(".$row->id.",".$role->id.",\"".$row->name."\",\"".$role->name."\")'";
                    }
                    $html.="<tr><td style='padding:0px;padding-bottom:2px'>".$role->name."</td><td style='padding:0px;padding-bottom:5px;padding-left:5px'>";
                    $html.="<span class='deletex' ".$remove_role_link." >x</span></td>";
                    $html.="</tr>";
                    $count+=1;
               }
               if($count==0)
               {
                    return "<span style='color:brown'>No Role<span>";
               }
               $html.="</table>";
               return $html;
            })
            ->addColumn('permissions', function($row){
                $permissions=Permission::all();
                $allowed_permission_ids=array();
                foreach($permissions as $permission)
                {
                    $search_index=array_search($permission->id,$allowed_permission_ids);
                    if(!$search_index&&$search_index!==0)
                    {
                        if($row->permissions->contains($permission))
                        {
                            $user_permissions=$row->permissions()->where("permissions.id",$permission->id)->get();
                            $flag=1;
                            foreach($user_permissions as $user_permission)
                            {
                                if($user_permission->pivot->status==0)
                                {
                                    $flag=0;
                                }
                            }
                            if($flag==1)
                            {
                                array_push($allowed_permission_ids,$permission->id);
                            }
                            continue;
                        }
                        foreach($permission->Roles as $role)
                        {
                            if($row->roles->contains($role))
                            {
                                array_push($allowed_permission_ids,$permission->id);
                                break;
                            }
                        }
                    }


                }
                 return count($allowed_permission_ids)." permissions";
             })
            ->addColumn('last_login', function($row){
                if($row->last_login==null)
                {
                    return '<span style="color:red">NotLoggedIn<span>';
                }
                else
                {
                    return $row->last_login;
                }
            })
            ->addColumn('user_status', function($row){
                if($row->status==1)
                {
                    return '<span class="badge bg-success">ENABLED<span>';
                }
                else
                {
                    return '<span class="badge bg-danger">DISABLED<span>';
                }
            })
            ->addColumn('action', function($row){

                $table="<div  style='display:none'>";
                $table.="<div id='button_groups_content_".$row->id."'><div class='p-1' style='border:1px solid gray;border-radius:5px'><table >";

                if(Auth::user()->hasPermissionWithName("assign_user_role"))
                {
                    $table.="<tr><td><button type='button'  class='btn btn-sm btn-purple btn-block' onclick=\"assign_user_role(".$row->id.",'".$row->name."','".$row->email."')\">Assign role</button></td></tr>";
                }

                $table.="<tr><td><button type='button'  class='btn btn-sm btn-teal btn-block' onclick='view_user_permission(".$row->id.",\"".$row->name."\")' >Permissions</button> </td></tr>";

                if(Auth::user()->hasPermissionWithName("enable_disable_user"))
                {
                    if($row->status==1)
                    {
                        $table.="<tr><td><button type='button' class='btn btn-sm btn-warning btn-block' onclick='disable_user(".$row->id.",\"".$row->name."\")'>Disable</button></td></tr>";
                    }
                    else
                    {
                        $table.="<tr><td><button type='button' class='btn btn-sm btn-success btn-block' onclick='enable_user(".$row->id.",\"".$row->name."\")'>Enable</button></td></tr>";
                    }
                }

                if(Auth::user()->hasPermissionWithName("update_user") && $row->last_login==null)
                {
                    $table.='<tr><td> <button type="button" class="btn btn-sm btn-block btn-primary" onclick=\'update_user('.$row->id.',"'.$row->name.'","'.$row->email.'")\'>update</button> </td></tr>';
                }

                if(Auth::user()->hasPermissionWithName("delete_user") && $row->last_login==null && $row->id!=Auth::user()->id)
                {
                    $table.='<tr><td> <button type="button" class="btn btn-sm btn-block btn-danger" onclick=\'delete_user('.$row->id.',"'.$row->name.'")\'>delete</button></td></tr>';
                }

                $table.="</table></div> </div></div>";

                $html=$table.'<a id="action_button_'.$row->id.'" tabindex="0"  role="button" data-bs-toggle="popover" title="" ><img style="padding:0px;width:30px;height:30px" src="'.asset("/assets/dots-three-circle-vertical.svg").'"></a>';
                $html.="<script>".
                            "$('#action_button_".$row->id."').popover({".
                                "content: $('#button_groups_content_".$row->id."').html(),".
                                "html: true,".
                                "placement: 'bottom',".
                                "trigger:'focus',".
                                "sanitize: false,".
                                "container: 'body'".
                            "});";
                $html.=" </script>";
                return $html;
            })


            ->rawColumns(['name','roles','permissions','last_login','user_status','action'])

            ->make(true);

    }
    function add_new_user(Request $request)
    {
        if(!Auth::user() || !Auth::user()->hasPermissionWithName("add_new_user"))
        {
            return "";
        }

        $rules=["user_name"=>"required|regex:/^[a-zA-Z\s-]+$/",
                "email"=>"required|email|unique:App\Models\Actor\User,email"];

        $messages=array(
            "user_name.required"=>"Enter user name!!",
            "user_name.regex"=>"User name should contains only alphabet characters!!",
            "email.required"=>"Enter the user email",
            "email.email"=>"Enter valid user email!",
            "email.unique"=>"Duplicate email is not allowed!!"
        );

        $validator = Validator::make($request->all(), $rules,$messages);

        if ($validator->fails())
        {
            $html="<ul>";
            foreach($validator->errors()->all() as $error)
            {
                $html.="<li>".$error.'</li>';
            }
            $html.="</ul>";
            return $html;
        }

        User::create(["name"=>$request->user_name,"email"=>$request->email,"user_type"=>"user","added_by"=>Auth::user()->id,"password"=>Hash::make("12345678")]);

        return "yes";
    }
    function unassigned_role(Request $request)
    {
        if(!Auth::user() || !Auth::user()->hasPermissionWithName("assign_user_role"))
        {
            return "";
        }
        $user=User::where("id",$request->user_id)->get()->first();
        if(!$user)
        {
            return "";
        }
        $roles=Role::all();
        foreach($roles as $role)
        {
            if($user->roles->contains($role))
            {
                $role["status"]=1;
            }
            else
            {
                $role["status"]=0;
            }
        }
        return $roles;
    }

    function assign_user_role(Request $request)
    {
        if(!Auth::user() || !Auth::user()->hasPermissionWithName("assign_user_role"))
        {
            return "";
        }
        $user=User::where("id",$request->user_id)->get()->first();
        if(!$user)
        {
            return "Select valid user to assign role!!";
        }
        $role=Role::where("id",$request->role_id)->get()->first();
        if(!$role)
        {
            return "Select valid role to assign!!";
        }
        if($user->roles->contains($role))
        {
            return "This role already assigned to this user!!";
        }
        $user->roles()->attach($role,["added_by"=>Auth::user()->id]);
        return "yes";
    }


    function remove_user_role(Request $request)
    {
        if(!Auth::user() || !Auth::user()->hasPermissionWithName("remove_user_role"))
        {
            return "";
        }
        $user=User::where("id",$request->user_id)->get()->first();
        if(!$user)
        {
            return "Select valid user to remove assigned role!!";
        }
        $role=Role::where("id",$request->role_id)->get()->first();
        if(!$role)
        {
            return "Select valid role to remove from user!!";
        }
        if(!$user->roles->contains($role))
        {
            return "This user do not have this role!!";
        }
        $user->roles()->detach($role);
        return "yes";
    }
    function load_user_permissions(Request $request)
    {
        if(!Auth::user() || !Auth::user()->hasPermissionWithName("assign_user_permission"))
        {
            return "";
        }

        $permission_groups=PermissionGroup::select(["id","group_name"])->orderBy("order_num","ASC")->get();

        $user=User::where("id",$request->user_id)->get()->first();

        if(!$user)
        {
            return "";
        }

        foreach($permission_groups as $group)
        {
            foreach($group->permissions as $permission)
            {

                if($user->hasPermissionWithName($permission->name))
                {
                    $permission['status']=1;
                }
                else
                {
                    $permission['status']=0;
                }
            }
        }

        return $permission_groups;

    }

    function assign_deassign_user_permission(Request $request)
    {
        if(!Auth::user() || !Auth::user()->hasPermissionWithName("assign_user_permission"))
        {
            return "";
        }
        $user=User::where("id",$request->user_id)->get()->first();

        if(!$user)
        {
            return "Select valid user!!";
        }

        $permission=Permission::where("id",$request->permission_id)->get()->first();
        if(!$permission)
        {
            return "Select valid permission to add and remove for user!!";
        }


        if($user->hasPermissionWithName($permission->name))
        {
            $user->permissions()->detach($permission->id);
            $user=User::where("id",$request->user_id)->get()->first();
            if($user->hasPermissionWithName($permission->name))
            {
                $user->permissions()->attach($permission,["added_by"=>Auth::user()->id,"status"=>0]);
            }
        }
        else
        {
            $user->permissions()->detach($permission);
            $user=User::where("id",$request->user_id)->get()->first();
            if(!$user->hasPermissionWithName($permission->name))
            {
                $user->permissions()->attach($permission,["added_by"=>Auth::user()->id]);
            }
        }

        return "yes";

    }
    function assign_all_user_permission(Request $request)
    {
        if(!Auth::user() || !Auth::user()->hasPermissionWithName("assign_user_permission"))
        {
            return "";
        }

        $user=User::where("id",$request->user_id)->get()->first();

        if(!$user)
        {
            return "Select valid user!!";
        }

        $permissions=Permission::all();

        foreach($permissions as $permission)
        {
            if(!$user->hasPermissionWithName($permission->name))
            {
                $user->permissions()->detach($permission);
                $user=User::where("id",$request->user_id)->get()->first();
                if(!$user->hasPermissionWithName($permission->name))
                {
                    $user->permissions()->attach($permission,["added_by"=>Auth::user()->id]);
                }
            }
        }
        return "yes";


    }
    function remove_all_user_permission(Request $request)
    {
        if(!Auth::user() || !Auth::user()->hasPermissionWithName("assign_user_permission"))
        {
            return "";
        }

        $user=User::where("id",$request->user_id)->get()->first();

        if(!$user)
        {
            return "Select valid user!!";
        }

        $user->permissions()->detach();
        $user->roles()->detach();
        return "yes";

    }

    function enable_disable_user(Request $request)
    {

        if(!Auth::user() || !Auth::user()->hasPermissionWithName("enable_disable_user"))
        {
            return "";
        }

        $user=User::where("id",$request->user_id)->get()->first();

        if(!$user)
        {
            return "Select valid user!!";
        }

        $user->update(["status"=>!$user->status]);


        return "yes";

    }

    function update_user(Request $request)
    {

        if(!Auth::user() || !Auth::user()->hasPermissionWithName("update_user"))
        {
            return "";
        }

        $user=User::where("id",$request->user_id)->get()->first();

        if(!$user || $user->last_login)
        {
            return "Select valid user who did not logged in yet!!";
        }

        $rules=["user_name"=>"required|regex:/^[a-zA-Z\s-]+$/",
                "email"=>"required|email|unique:App\Models\Actor\User,email,".$user->id];

        $messages=array(
            "user_name.required"=>"Enter user name!!",
            "user_name.regex"=>"User name should contains only alphabet characters!!",
            "email.required"=>"Enter the user email",
            "email.email"=>"Enter valid user email!",
            "email.unique"=>"Duplicate email is not allowed!!"
        );

        $validator = Validator::make($request->all(), $rules,$messages);

        if ($validator->fails())
        {
            $html="<ul>";
            foreach($validator->errors()->all() as $error)
            {
                $html.="<li>".$error.'</li>';
            }
            $html.="</ul>";
            return $html;
        }

        $user->update(["name"=>$request->user_name,"email"=>$request->email,"updated_by"=>Auth::user()->id]);

        return "yes";

    }

    function delete_user(Request $request)
    {
        if(!Auth::user() || !Auth::user()->hasPermissionWithName("delete_user"))
        {
            return "";
        }
        $user=User::where("id",$request->user_id)->get()->first();

        if(!$user)
        {
            return "Select valid user!!";
        }
        if($user->last_login)
        {
            return "You can not delete logged in user!!";
        }

        if($user->id==Auth::user()->id)
        {
            return "You can not delete yourself!!";
        }

        $user->update(["status"=>!$user->status]);

        $user->permissions()->detach();
        $user->roles()->detach();
        $user->delete();

        return "yes";

    }
}
