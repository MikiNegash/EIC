<?php

namespace App\Models\Base;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Actor\Customer;
class ItemRegRequest extends Model
{
    use HasFactory;
    protected $table='item_reg_request';
    protected $id='id';
    protected $fillable = ['name', 'comment','sent_by','created_at 	updated_at'];
    public function SentBy()
    {
        return $this->belongsTo(Customer::class,'sent_by','id');
    }
}
