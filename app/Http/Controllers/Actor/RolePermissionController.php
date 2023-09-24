<?php

namespace App\Http\Controllers\Actor;

use App\Http\Controllers\Controller;
use App\Models\Actor\Permission;
use App\Models\Actor\PermissionGroup;
use App\Models\Actor\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
class RolePermissionController extends Controller
{

    function view_roles()
    {
       /** @var \App\Models\Actor\User */
       if(!Auth::user() || !Auth::user()->hasPermissionWithName("view_users"))
       {
            return view("errors.role_permission_error");
       }
       return view("basic.roles");
    }

    function load_roles(Request $request)
    {
       /** @var \App\Models\Actor\User */
       if(!Auth::user() || !Auth::user()->hasPermissionWithName("view_role"))
       {
            return "";
       }
       $roles=Role::where('name', 'LIKE', "%{$request->key}%")->get();
       foreach($roles as $role)
       {
            $role["permission_size"]=$role->Permissions->count();
            $role["permissions"]=null;
       }
       return $roles;
    }

    function load_role_permissions(Request $request)
    {
        if(!Auth::user() || !Auth::user()->hasPermissionWithName("view_role"))
        {
            return "";
        }

        $permission_groups=PermissionGroup::select(["id","group_name"])->orderBy("order_num","ASC")->get();

        $role=Role::where("id",$request->role_id)->get()->first();

        if(!$role)
        {
            return "";
        }

        foreach($permission_groups as $group)
        {
            foreach($group->permissions as $permission)
            {
                if($role->Permissions->contains($permission->id))
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

    function assign_deassign_permission(Request $request)
    {
        if(!Auth::user() || !Auth::user()->hasPermissionWithName("assign_role_permission"))
        {
            return "";
        }


        $role=Role::where("id",$request->role_id)->get()->first();

        if(!$role)
        {
            return "";
        }

        $permission=Permission::where("id",$request->permission_id)->get()->first();

        if(!$permission)
        {
            return "";
        }

        if($role->Permissions->contains($permission))
        {
            $role->Permissions()->detach($permission);
        }
        else
        {
            if(!$role->Permissions->contains($permission))
            {
                $role->Permissions()->attach($permission,["added_by"=>Auth::user()->id]);
            }
        }
        return "yes";
    }


    function assign_all_role_permission(Request $request)
    {
        if(!Auth::user() || !Auth::user()->hasPermissionWithName("assign_role_permission"))
        {
            return "";
        }
        $role=Role::where("id",$request->role_id)->get()->first();

        if(!$role)
        {
            return "";
        }

        $permissions=Permission::all();

        foreach($permissions as $permission)
        {
            if(!$role->Permissions->contains($permission))
            {
                $role->Permissions()->attach($permission,["added_by"=>Auth::user()->id]);
            }
        }

        return "yes";



    }

    function remove_all_role_permission(Request $request)
    {
        if(!Auth::user() || !Auth::user()->hasPermissionWithName("assign_role_permission"))
        {
            return "";
        }
        $role=Role::where("id",$request->role_id)->get()->first();

        if(!$role)
        {
            return "";
        }

        $role->Permissions()->detach(Permission::all(),["added_by"=>Auth::user()->id]);

        return "yes";
    }

    function add_new_role(Request $request)
    {
        if(!Auth::user() || !Auth::user()->hasPermissionWithName("create_new_role"))
        {
            return "";
        }

        $rules=["role_name"=>"required|unique:App\Models\Actor\Role,name|regex:/^[a-zA-Z0-9\s-]+$/"];

        $messages=array(
            "role_name.required"=>"Enter role name!!",
            "role_name.unique"=>"This name is already exist!!",
            "role_name.regex"=>"Role name should contains only alpha numeric characters!!"
        );

        $validator = Validator::make($request->all(), $rules,$messages);

        if ($validator->fails()) {
            $html="<ul>";
            foreach($validator->errors()->all() as $error)
            {
                $html.="<li>".$error.'</li>';
            }
            $html.="</ul>";
            return $html;
        }

        Role::create(["name"=>$request->role_name,"added_by"=>Auth::user()->id]);

        return "yes";
    }


    function update_role(Request $request)
    {
        if(!Auth::user() || !Auth::user()->hasPermissionWithName("update_role"))
        {
            return "";
        }

        $role=Role::where("id",$request->role_id)->get()->first();

        if(!$role)
        {
            return "Select valid role to update!!";
        }

        $rules=["role_name"=>"required|unique:App\Models\Actor\Role,name,".$role->id."|regex:/^[a-zA-Z0-9\s-]+$/"];

        $messages=array(
            "role_name.required"=>"Enter role name!!",
            "role_name.unique"=>"This name is already exist!!",
            "role_name.regex"=>"Role name should contains only alpha numeric characters!!"
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

        $role->update(["name"=>$request->role_name]);

        return "yes";
    }



    function delete_role(Request $request)
    {
        if(!Auth::user() || !Auth::user()->hasPermissionWithName("delete_role"))
        {
            return "";
        }

        $role=Role::where("id",$request->role_id)->get()->first();

        if(!$role)
        {
            return "Select valid role to delete!!";
        }

        $role->Permissions()->detach(Permission::all(),["added_by"=>Auth::user()->id]);
        $role->Users()->detach(Permission::all(),["added_by"=>Auth::user()->id]);

        $role->delete();
        return "yes";
    }

}
