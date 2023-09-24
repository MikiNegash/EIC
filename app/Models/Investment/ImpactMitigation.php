<?php

namespace App\Models\Investment;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImpactMitigation extends Model
{
    use HasFactory;
    protected $table='impact_and_mitigation';
    protected $id='id';
    protected $fillable = ['investment_id','impact','mitigation','created_at','updated_at'];
    public function Investment()
    {
        return $this->belongsTo(Investment::class,'investment_id','id');
    }

}
