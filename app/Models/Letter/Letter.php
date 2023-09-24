<?php

namespace App\Models\Letter;

use App\Models\Actor\Customer;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Actor\User;
use App\Models\Actor\Stakeholder;
use App\Models\Investment\Investment;
class Letter extends Model
{
    use HasFactory;
    protected $table='letters';
    protected $id='id';

    protected $fillable = [ 'letter_identifier','letter_code_id' , 'stakeholder_sender_id' , 'stakeholder_reciever_id' ,
                             'investment_sender_id' , 'investment_reciever_id' , 'investor_sender_id' , 'investor_reciever_id' ,
                             'is_prepared' , 'initialized_by' , 'prepared_by' , 'updated_by' , 'create_style' , 'approved_by' ,
                             'sent_date' , 'ref_no' , 'subject' , 'conclusion' , 'status' , 'archiever_id' , 'view_status' ,
                             'comment' , 'letter_path' , 'viewed_by' , 'created_at' , 'updated_at'];

    public function LetterCode()
    {
        return $this->belongsTo(LetterCode::class,'letter_code_id','id');
    }
    public function InitializedBy()
    {
        return $this->belongsTo(User::class,'initialized_by','id');
    }
    public function PreparedBy()
    {
        return $this->belongsTo(User::class,'prepared_by','id');
    }
    public function UpdatedBy()
    {
        return $this->belongsTo(User::class,'prepared_by','id');
    }
    public function ApprovedBy()
    {
        return $this->belongsTo(User::class,'approved_by','id');
    }
    public function SenderStakeholder()
    {
        return $this->belongsTo(Stakeholder::class,'stakeholder_sender_id','id');
    }
    public function RecieverStakeholder()
    {
        return $this->belongsTo(Stakeholder::class,'stakeholder_reciever_id','id');
    }
    public function SenderInvestment()
    {
        return $this->belongsTo(Investment::class,'investment_sender_id','id');
    }
    public function RecieverInvestment()
    {
        return $this->belongsTo(Investment::class,'investment_reciever_id','id');
    }
    public function SenderInvestor()
    {
        return $this->belongsTo(Customer::class,'investor_sender_id','id');
    }
    public function RecieverInvestor()
    {
        return $this->belongsTo(Customer::class,'investor_reciever_id','id');
    }
    public function Archiever()
    {
        return $this->belongsTo(User::class,'archiever_id','id');
    }
    public function viewed_by()
    {
        return $this->belongsTo(User::class,'viewed_by','id');
    }
}
