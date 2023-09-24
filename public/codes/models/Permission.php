<?php

namespace App\Models\Actor;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Permission extends Model
{
    use HasFactory;
    protected $table="permissions";
    protected $id="id";
    protected $fillable = [
        'name',"order_num","group_id", "created_at", 	"updated_at"
    ];

    public function Roles()
    {
        return $this->belongsToMany(Role::class, RolePermission::class, 'permission_id', 'role_id');
    }
    public function permission_group()
    {
        return $this->belongsTo(PermissionGroup::class,'group_id','id');
    }

}
