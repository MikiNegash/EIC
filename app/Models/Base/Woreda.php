<?php

namespace App\Models\Base;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Actor\User;
class Woreda extends Model
{

    use HasFactory;
    protected $table='Woreda';
    protected $id='id';
    protected $fillable = ['name', 	'zone_id', 	'created_by', 'created_at', 'updated_at'];
    public function CreatedBy()
    {
        return $this->belongsTo(User::class,'created_by','id');
    }
    public function Zone()
    {
        return $this->belongsTo(Zone::class,'zone_id','id');
    }
    public function WoredaNameandId()
    {
        return self::all(['id', 'name']);
    }
    public function WoredaNameAndIdByZone($zoneId)
    {
        return $this->where('zone_id', $zoneId)->pluck('name', 'id');
    }
}
