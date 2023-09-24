<?php
namespace App\Library;

use App\Models\Actor\Permission;


trait HasPermissionsTrait {

    public function hasPermissionWithName($permission_name)
    {
        $permission=Permission::where("name",$permission_name)->get()->first();

        if(!$permission)
        {
           return false;
        }

        $permission_status=$this->CheckPermissionStatusById($p_id=$permission->id);

        if($permission_status!==NULL)
        {
            return $permission_status;
        }

        return $this->CheckPermissionThroughRole($permission);
    }


    public function hasPermissionWithId($permission_id)
    {
        $permission=Permission::where("id",$permission_id)->get()->first();

        if(!$permission)
        {
           return false;
        }

        $permission_status=$this->CheckPermissionStatusById($p_id=$permission->id);

        if($permission_status!==NULL)
        {
            return $permission_status;
        }

        return $this->CheckPermissionThroughRole($permission);
    }


    public function CheckPermissionStatusById($permission_id)
    {
        foreach($this->permissions as $_permission)
        {
            if($_permission->id==$permission_id)
            {
                if($_permission->pivot->status==true)
                {
                    return true;
                }
                else
                {
                    return false;
                }
            }
        }
        return NULL;
    }


    public function CheckPermissionThroughRole($permission)
    {
        foreach ($permission->roles as $role)
        {
            if($this->roles->contains($role))
            {
                return true;
            }
        }
        return false;
    }

 }
