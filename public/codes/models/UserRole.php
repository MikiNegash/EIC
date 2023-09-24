<?php

namespace App\Models\Actor;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    use HasFactory;
    protected $table="user_role";
    protected $id="id";
    protected $fillable = [
        'role_id','user_id','added_by', "created_at", 	"updated_at"
    ];
    public function AddedBy()
    {
        return $this->belongsTo(User::class,'added_by','id');
    }
    public function Role()
    {
        return $this->belongsTo(Role::class,'role_id','id');
    }
    public function User()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}
