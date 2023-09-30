<?php

namespace App\Models\Investment;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvestmentCommission extends Model
{
    use HasFactory;
    protected $table='investment_commissions';
    protected $id='id'; 
    protected $fillable = ['is_main','name','code','registered_by','updated_by','status','statusChangedBy','type','created_at','updated_at','region_id'];
    public function Investment()
    {
        return $this->belongsTo(Investment::class,'investment_id','id');
    }

    public function InvestmentCommissionNameandId()
    {
        return self::all(['id','name','code','registered_by','updated_by','status','type','created_at','updated_at','region_id']);
    }
  /*   public static function saveInvestmentWithCompanyNames($investmentData, $companyNameData)
    {
        $investment = Investment::create($investmentData);

        $companyNameOptions = [
            'investment_id' => $investment->id,
            'name1' => $companyNameData['name1'],
            'name2' => $companyNameData['name2'],
            'name3' => $companyNameData['name3'],
        ];

        CompanyName::create($companyNameOptions);

        return $investment->id;
    } */
}
