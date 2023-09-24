<?php

namespace App\Models\Actor;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPermission extends Model
{
    use HasFactory;
    protected $table="user_permissions";
    protected $id="id";
    protected $fillable = [
        'permission_id','user_id','status','added_by', "created_at", "updated_at"
    ];
    public function AddedBy()
    {
        return $this->belongsTo(User::class,'added_by','id');
    }
    public function Permission()
    {
        return $this->belongsTo(Permission::class,'permission_id','id');
    }
    public function User()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}
