<?php

namespace App\Models\Actor;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SideBarMenuItem extends Model
{
    use HasFactory;
    protected $table='sidebar_menu_item';
    protected $id='id';
    protected $fillable = ['title','menu_id','permission_id','item_code','created_at','updated_at'];
    public function Menu()
    {
        return $this->belongsTo(SideBarMenu::class,'menu_id','id');
    }
    public function Permission()
    {
        return $this->belongsTo(Permission::class,'permission_id','id');
    }
}
