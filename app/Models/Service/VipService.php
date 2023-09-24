<?php

namespace App\Models\Service;

use App\Models\Actor\Customer;
use App\Models\Letter\Letter;

use App\Models\Actor\User;
use App\Models\Investment\Investment;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VipService extends Model
{
    use HasFactory;
    protected $table='vip_service';
    protected $id='id';
    protected $fillable = ['service_type_id','investment_id','customer_id','landing_date','letter_id',
                            'reviewed_by','review_status','approved_by','approve_status','approved_date',
                            'created_at','updated_at'];
    public function ServiceType()
    {
        return $this->belongsTo(VipServiceType::class,'service_type_id','id');
    }
    public function getServiceTypeNameAndId()
    {
        if ($this->ServiceType) {
            return [
                'id' => $this->ServiceType->id,
                'service' => $this->ServiceType->service,
            ];
        }
        return null;
    }
    public function Letter()
    {
        return $this->belongsTo(Letter::class,'letter_id','id');
    }
    public function saveLetterAndGetId($letterData)
    {
        $letter = new Letter($letterData);
        $letter->save();
        $letterId = $letter->id;
        return $letterId;
    }
    public function saveVipService($requestData)
    {
        $this->fill($requestData);
        $this->save();
        $serviceId = $this->id;

        return $serviceId;
    }
    public function Investment()
    {
        return $this->belongsTo(Investment::class,'investment_id','id');
    }
    public function Customer()
    {
        return $this->belongsTo(Customer::class,'customer_id','id');
    }
    public function ReviewedBy()
    {
       return $this->belongsTo(User::class,'reviewed_by','id');
    }
    public function ApprovedBy()
    {
       return $this->belongsTo(User::class,'approved_by','id');
    }
    public function getCompanyName()
    {
        if ($this->Investment) {
            return $this->Investment->companyName->company_name;
        }
        return null;
    }

    // Define the function to get customer_name from the Customer model
    public function getCustomerName()
    {
        if ($this->Customer) {
            return $this->Customer->customer_name;
        }
        return null;
    }

    // Define the function to get reviewed_by_name from the Customer model
    public function getReviewedByName()
    {
        if ($this->ReviewedBy) {
            return $this->ReviewedBy->customer_name;
        }
        return null;
    }

    // Define the function to get approved_by_name from the Customer model
    public function getApprovedByName()
    {
        if ($this->ApprovedBy) {
            return $this->ApprovedBy->customer_name;
        }
        return null;
    }
}
