<?php

namespace App\Models\Payment;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Actor\User;
class PaymentCase extends Model
{
    use HasFactory;
    protected $table='payment_cases';
    protected $id='id';
    protected $fillable = ['case_name', 'amount_dollar', 'amount_birr','amount_set_by','created_at','updated_at'];
    public function AmountSetBy()
    {
        return $this->belongsTo(User::class,'amount_set_by','id');
    }
}
