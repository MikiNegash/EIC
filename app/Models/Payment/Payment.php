<?php

namespace App\Models\Payment;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Actor\Customer;
use App\Models\Actor\User;
class Payment extends Model
{
    use HasFactory;
    protected $table='payment';
    protected $id='id';
    protected $fillable = ['case_id', 	'payer_id', 'amount_birr', 	'amount_dollar', 'cashier_id',
                            'api_id', 	'api_transaction_id', 	'issued_date', 	'payment_status',
                            'payment_slip', 'processed_by', /* api or manual */
                            'created_at', 'updated_at'];

    public function PaymentCase()
    {
        return $this->belongsTo(PaymentCase::class,'case_id','id');
    }

    public function Payer()
    {
        return $this->belongsTo(Customer::class,'payer_id','id');
    }

    public function Cashier()
    {
        return $this->belongsTo(User::class,'cashier_id','id');
    }

}
