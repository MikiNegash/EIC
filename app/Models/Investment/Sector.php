<?php

namespace App\Models\Investment;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    use HasFactory;
    protected $table='lr_investment_sector';
    protected $id='id';
    public $fillable = ['parent_id','name ','type','added_by','updated_by','statusChangedBy','status','created_at','updated_at'];
    
    public function childs() {
        return $this->hasMany('App\Models\Investment\Sector','parent_id','id') ;
    }

}
