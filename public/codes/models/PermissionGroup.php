<?php

namespace App\Models\Actor;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PermissionGroup extends Model
{
    use HasFactory;
    protected $table='permission_group';
    protected $id='id';
    protected $fillable = ['group_name','order_num','created_at','updated_at'];

    public function permissions()
    {
        return $this->hasMany(Permission::class,'group_id','id');
    }
}
