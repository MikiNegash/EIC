<?php

namespace App\Models\Investment;

use App\Models\Base\Item;
use App\Models\Base\MeasurementUnit;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnnualProduction extends Model
{
    use HasFactory;
    protected $table='annual_production';
    protected $id='id';
    protected $fillable = ['investment_id','item_id','measurement_id','local_share','export_share','created_at','updated_at'];
    public function Investment()
    {
        return $this->belongsTo(Investment::class,'investment_id','id');
    }
    public function Item()
    {
        return $this->belongsTo(Item::class,'item_id','id');
    }
    public function MeasurementUnit()
    {
        return $this->belongsTo(MeasurementUnit::class,'measurement_id','id');
    }

}
