<?php

namespace App\Models\Visa;

use App\Models\Actor\Customer;
use App\Models\Actor\User;
use App\Models\Base\VisaType;
use App\Models\Investment\Investment;
use App\Models\Letter\Letter;
use App\Models\Payment\Payment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisaRequest extends Model
{
    use HasFactory;
    protected $table='visa_request';
    protected $id='id';
    protected $fillable = ['visa_type', 	'visa_process_type', 	'investment_id', 	'letter_id' ,	'other_docs',
    'customer_id','pm_approved_by','pm_review_status','reviewed_by','review_status','approved_by','approve_status',
    'comment','payment_id','visa_file','visa_file_approved_by','visa_file_comment','file_submitted_date','issued_date',
    'expired_date','converting_visa_type_id','other_visa_file','created_at','updated_at'];

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
        return $this->belongsTo(Customer::class,'customer_id','id');
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

    public function VisaFileApprovedBy()
    {
        return $this->belongsTo(User::class,'visa_file_approved_by','id');
    }

    public function ConvertingVisaType()
    {
        return $this->belongsTo(VisaType::class,'converting_visa_type_id','id');
    }


}
