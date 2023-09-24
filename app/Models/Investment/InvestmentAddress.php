<?php

namespace App\Models\Investment;

use App\Models\Base\Woreda;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvestmentAddress extends Model
{
    use HasFactory;
    protected $table='investment_address';
    protected $id='id';
    protected $fillable = ['investment_id','woreda_id','house_no','p_o_box','telephone','fax_email','address_type','created_at','updated_at'];
    public function Investment()
    {
        return $this->belongsTo(Investment::class,'investment_id','id');
    }
    public function Woreda()
    {
        return $this->belongsTo(Woreda::class,'woreda_id','id');
    }

}
