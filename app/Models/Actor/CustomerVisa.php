<?php

namespace App\Models\Actor;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerVisa extends Model
{
    use HasFactory;
    protected $table='customer_visa';
    protected $id='id';
    protected $fillable = ["customer_id", 	"visa_file",
                           "visa_type", "visa_code", "issued_date",
                           	"expired_date", "status"];
    public function Customer()
    {
        return $this->belongsTo(Customer::class,'customer_id','id');
    }

}
