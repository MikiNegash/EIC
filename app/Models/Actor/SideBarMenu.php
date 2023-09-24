<?php

namespace App\Models\Actor;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SideBarMenu extends Model
{
    use HasFactory;
    protected $table='sidebar_menu';
    protected $id='id';
    protected $fillable = ['title', 'user_type','icon','code','created_at','updated_at'];
    public function MenuItems()
    {
        return $this->hasMany(SideBarMenuItem::class,'menu_id','id');
    }

}
