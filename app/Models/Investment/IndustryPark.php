<?php

namespace App\Models\Investment;

use App\Models\Actor\Stakeholder;
use App\Models\Base\Woreda;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IndustryPark extends Model
{
    use HasFactory;
    protected $table='lr_industrial_park';
    protected $id='id';
    protected $fillable = ['name','woreda_id','status','stakeholder_id','added_by','updated_by','statusChangedBy','created_at','updated_at'];
    public function Investment()
    {
        return $this->belongsTo(Stakeholder::class,'stakeholder_id','id');
    }
    public function Woreda()
    {
        return $this->belongsTo(Woreda::class,'woreda_id','id');
    }
    public function IndustryparkAll()
    {
        return self::all(['id','name','status','woreda_id','stakeholder_id','added_by','updated_by','statusChangedBy','created_at','updated_at']);
    }

}
