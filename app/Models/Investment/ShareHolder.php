<?php

namespace App\Models\Investment;

use App\Models\Actor\Customer;
use App\Models\Actor\Investors;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShareHolder extends Model
{
    use HasFactory;
    protected $table='lr_shareholders';
    protected $id='id';
    protected $fillable = ['investment_id','investor_id ','is_signed','telephone1','telephone2','number_share','created_at','updated_at'];
    public function Investment()
    {
        return $this->belongsTo(Investment::class,'investment_id','id');
    }
    public function Customer()
    {
        return $this->belongsTo(Customer::class,'investor_id ','id')->with('user:id,name');
    }
    public static function getIdAndInvestmentIdByCustomerId($customerId)
    {
        return self::where('investor_id ', $customerId)
            ->with('Investment:id,investment_name')
            ->select('investment_id')
            ->get();
    }
    public function CustomerNameandId()
    {
        return Investors::with('user:id,name')
        ->select('id', 'user_id')
        ->whereIn('id', $this->pluck('investor_id'))
        ->get();
    }
}
