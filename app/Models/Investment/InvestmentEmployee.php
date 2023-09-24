<?php

namespace App\Models\Investment;

use App\Models\Actor\Customer;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvestmentEmployee extends Model
{
    use HasFactory;
    protected $table='investment_employee';
    protected $id='id';
    protected $fillable = ['investment_id','employee_id','is_accepted','status','added_by','educational_background','work_experience',
                           'contract_agreement','created_at','updated_at'];
    public function Employee()
    {
        return $this->belongsTo(Customer::class,'employee_id','id');
    }
    public function Investment()
    {
        return $this->belongsTo(Investment::class,'investment_id','id');
    }
    public function AddedBy()
    {
        return $this->belongsTo(Customer::class,'added_by','id');
    }
}
