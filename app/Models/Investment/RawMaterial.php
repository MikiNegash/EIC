<?php

namespace App\Models\Investment;

use App\Models\Base\Material;
use App\Models\Base\MeasurementUnit;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RawMaterial extends Model
{
    use HasFactory;
    protected $table='raw_materials';
    protected $id='id';
    protected $fillable = ['investment_id','material_id','measurement_id','local_share','export_share','created_at','updated_at'];
    public function Investment()
    {
        return $this->belongsTo(Investment::class,'investment_id','id');
    }
    public function Material()
    {
        return $this->belongsTo(Material::class,'material_id','id');
    }
    public function MeasurementUnit()
    {
        return $this->belongsTo(MeasurementUnit::class,'measurement_id','id');
    }

}
