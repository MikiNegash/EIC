<?php

namespace App\Models\Base;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Actor\User;
class Region extends Model
{
    use HasFactory;
    protected $table='Region';
    protected $id='id';
    protected $fillable = ['name','code','type','created_by','created_at' ,'updated_at'];
    public function CreatedBy()
    {
        return $this->belongsTo(User::class,'created_by','id');
    }
    public function Zones()
    {
        return $this->hasMany(Zone::class,'region_id','id');
    }
    public function RegionNameandId()
    {
        return self::all(['id', 'name']);
    }
}
