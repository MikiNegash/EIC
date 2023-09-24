<?php

namespace App\Models\Actor;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RolePermission extends Model
{
    use HasFactory;
    protected $table="role_permissions";
    protected $id="id";
    protected $fillable = [
        'role_id','permission_id','added_by', "created_at", 	"updated_at"
    ];
    public function AddedBy()
    {
        return $this->belongsTo(User::class,'added_by','id');
    }
    public function Role()
    {
        return $this->belongsTo(Role::class,'role_id','id');
    }
    public function Permission()
    {
        return $this->belongsTo(Permission::class,'permission_id','id');
    }
}
