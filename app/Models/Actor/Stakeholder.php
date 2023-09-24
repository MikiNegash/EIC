<?php

namespace App\Models\Actor;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stakeholder extends Model
{
    use HasFactory;
    protected $table='stakeholders';
    protected $id='id';
    protected $fillable = ['name','address','main_id', 'address','api_link','api_token','key','data_format','added_by','created_at','updated_at'];
    public function MainStakeholder()
    {
        return $this->belongsTo(MainStakeholder::class,'main_id','id');
    }
    public function AddedBy()
    {
        return $this->belongsTo(User::class,'added_by','id');
    }
}
