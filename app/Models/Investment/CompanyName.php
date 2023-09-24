<?php

namespace App\Models\Investment;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyName extends Model
{
    use HasFactory;
    protected $table='company_name';
    protected $id='id'; 
    protected $fillable = ['viewed_by','name','comment','name1','name2','name3','selected_name','investment_id','created_at','updated_at','sent_by'];
    public function Investment()
    {
        return $this->belongsTo(Investment::class,'investment_id','id');
    }
    public static function saveInvestmentWithCompanyNames($investmentData, $companyNameData)
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
    }
}
