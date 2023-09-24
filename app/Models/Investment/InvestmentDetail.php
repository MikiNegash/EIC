<?php

namespace App\Models\Investment;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvestmentDetail extends Model
{
    use HasFactory;
    protected $table='investment_detail';
    protected $id='id';
    protected $fillable = ['investment_id','field_of_business','objective','capital_in_usd','capital_in_etb',
                            'finance_source_equity','finance_source_loan','estimated_employee','info_source',
                            'created_at','updated_at'];
    public function Investment()
    {
        return $this->belongsTo(Investment::class,'investment_id','id');
    }
    public function InfoSource()
    {
        return $this->belongsTo(InformationSource::class,'info_source_id','id');
    }
}
