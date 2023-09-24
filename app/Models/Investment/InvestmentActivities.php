<?php

namespace App\Models\Investment;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvestmentActivities extends Model
{
    use HasFactory;
    protected $table='investment_activities';
    protected $id='id';
    protected $fillable = ['investment_id', 'description', 	'is_major','created_at','updated_at'];
    public function Investment()
    {
        return $this->belongsTo(Investment::class,'investment_id','id');
    }
}
