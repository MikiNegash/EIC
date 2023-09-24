<?php

namespace App\Models\Investment;

use App\Models\Actor\Customer;
use App\Models\Actor\User;
use App\Models\Base\BusinessType;
use App\Models\Payment\Payment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investment extends Model
{
    use HasFactory;
    protected $table='investments';
    protected $id='id';
    protected $fillable = ['investment_type_id','company_name_id','company_name_status','shareholder_or_not','typ_of_ownership','trade_name','business_type_id',
                            'manager_id','created_by','attorney_id','reviewed_by','review_status','approved_by','approve_status',
                            'comment','payment_id','license_file','license_prepared_by','issued_date','expired_date','license_code',
                            'investment_status','status_changed_by','created_at','updated_at'];
    public function InvestmentType()
    {
        return $this->belongsTo(InvestmentType::class,'investment_type_id','id');
    }
    public function CompanyName()
    {
        return $this->belongsTo(CompanyName::class,'company_id','id');
    }
    public function Manager()
    {
        return $this->belongsTo(Customer::class,'manager_id','id');
    }
    public function CreatedBy()
    {
        return $this->belongsTo(User::class,'created_by','id');
    }
    public function ReviewedBy()
    {
        return $this->belongsTo(User::class,'reviewed_by','id');
    }
    public function ApprovedBy()
    {
        return $this->belongsTo(User::class,'approved_by','id');
    }
    public function Payment()
    {
        return $this->belongsTo(Payment::class,'payment_id','id');
    }
    public function LicensePreparedBy()
    {
        return $this->belongsTo(User::class,'license_prepared_by','id');
    }
    public function StatusChangedBy()
    {
        return $this->belongsTo(User::class,'status_changed_by','id');
    }
    public function Attorney()
    {
        return $this->belongsTo(Company_representative::class,'attorney_id','id');
    }
}
