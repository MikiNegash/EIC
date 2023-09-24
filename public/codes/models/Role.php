<?php

namespace App\Models\Actor;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $table="roles";
    protected $id="id";
    protected $fillable = [
        'name','added_by', "created_at", 	"updated_at"
    ];
    public function AddedBy()
    {
        return $this->belongsTo(User::class,'added_by','id');
    }

    public function Permissions()
    {
        return $this->belongsToMany(Permission::class, RolePermission::class, 'role_id', 'permission_id');
    }

    public function Users()
    {
        return $this->belongsToMany(User::class, UserRole::class, 'role_id', 'user_id');
    }

}
