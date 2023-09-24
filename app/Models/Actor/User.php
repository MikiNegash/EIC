<?php

namespace App\Models\Actor;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use App\Library\HasPermissionsTrait;
class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable, HasPermissionsTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    //use HasRoles;
    protected $fillable = [
        'name','email','password','user_type',"email_verified_at",'last_login','photo',"status","added_by", "updated_by", "statusChangedBy","remember_token","created_at", 	"updated_at"

    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];


    public function permissions()
    {
        return $this->belongsToMany(Permission::class, UserPermission::class, 'user_id', 'permission_id')->withPivot('status','Updated_at', 'created_at','added_by');;
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class, UserRole::class, 'user_id', 'role_id');
    }

    public function AddedBy()
    {
        return $this->belongsTo(self::class, 'added_by');
    }

    public function UpdatedBy()
    {
        return $this->belongsTo(self::class, 'update_by');
    }

    public function StatusChangedBy()
    {
        return $this->belongsTo(self::class, 'statusChangedBy');
    }

    public function UserImage()
    {
        return $this->hasOne(UserImage::class, 'user_id','id');
    }



}
