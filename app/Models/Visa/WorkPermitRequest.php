<?php

namespace App\Models\Visa;

use App\Models\Actor\Customer;
use App\Models\Actor\User;
use App\Models\Letter\Letter;
use App\Models\Investment\Investment;
use App\Models\Payment\Payment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkPermitRequest extends Model
{
    use HasFactory;
    protected $table='work_permit_request';
    protected $id='id';
    protected $fillable = ['process_type','investment_id','letter_id','other_docs',
                            'employee_id','pm_approved_by','pm_review_status','reviewed_by','review_status',
                            'approved_by','approve_status','comment','payment_id','work_permit_file',
                            'work_permit_prepared_by','issued_date','expired_date','work_permit_code',
                            'work_permit_status','status_changed_by','created_at','updated_at'];
    public function Investment()
    {
        return $this->belongsTo(Investment::class,'investment_id','id');
    }
    public function Letter()
    {
        return $this->belongsTo(Letter::class,'letter_id','id');
    }
    public function Customer()
    {
        return $this->belongsTo(Customer::class,'employee_id','id');
    }
    public function PmApprovedBy()
    {
        return $this->belongsTo(Customer::class,'pm_approved_by','id');
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
    public function WorkPermitPreparedBy()
    {
        return $this->belongsTo(User::class,'work_permit_prepared_by','id');
    }
    public function StatusChangedBy()
    {
        return $this->belongsTo(User::class,'status_changed_by','id');
    }


}
