<?php

namespace App\Models\Investment;

use App\Models\Actor\Customer;
use App\Models\Actor\User;
use App\Models\Payment\Payment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LandNotarization extends Model
{
    use HasFactory;
    protected $table='land_notarization';
    protected $id='id';
    protected $fillable = ['investment_id','created_by','type','authenticated_by','authenticate_status','approved_by',
                            'approve_status','comment','payment_id','agreement_draft','agreement_doc_file','file_status',
                            'file_comment','archieve_id','created_at','updated_at'];
    public function Investment()
    {
        return $this->belongsTo(Investment::class,'investment_id','id');
    }
    public function CreatedBy()
    {
        return $this->belongsTo(Customer::class,'created_by','id');
    }
    public function AuthenticatedBy()
    {
        return $this->belongsTo(User::class,'authenticated_by','id');
    }
    public function ApprovedBy()
    {
        return $this->belongsTo(User::class,'approved_by','id');
    }
    public function Payment()
    {
        return $this->belongsTo(Payment::class,'payment_id','id');
    }
    public function Archiever()
    {
        return $this->belongsTo(User::class,'archieve_id','id');
    }
}
