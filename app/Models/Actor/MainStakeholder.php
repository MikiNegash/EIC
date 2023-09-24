<?php

namespace App\Models\Actor;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainStakeholder extends Model
{
    use HasFactory;
    protected $table='main_stakeholders';
    protected $id='id';
    protected $fillable = ['name','label','created_at','updated_at'];
    public function stakeholders()
    {
        return $this->hasMany(Stakeholder::class,'main_id','id');
    }
}
