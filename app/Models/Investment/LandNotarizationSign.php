<?php

namespace App\Models\Investment;

use App\Models\Actor\Customer;
use App\Models\Actor\User;
use App\Models\Payment\Payment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LandNotarizationSign extends Model
{
    use HasFactory;
    protected $table='land_notarization_sign';
    protected $id='id';
    protected $fillable = ['notarization_id','shareholder_id','is_signed','created_at','updated_at'];
    public function LandNotarization()
    {
        return $this->belongsTo(LandNotarization::class,'investment_id','id');
    }
    public function ShareHolder()
    {
        return $this->belongsTo(ShareHolder::class,'shareholder_id','id');
    }
}
