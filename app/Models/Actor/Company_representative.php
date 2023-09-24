<?php

namespace App\Models\Actor;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company_representative extends Model
{
    use HasFactory;
    protected $table="company_representative";
    protected $id="id";
    protected $fillable = [
        'investment_id',
        'representative_id',
        'is_signed',
        'telephone1',
        'email',
        'telephone2',
    ];

    public function investment()
    {
        return $this->hasMany(investment::class,'investment_id','id'); 
    }
    public function customer()
    {
        return $this->belongsTo(Customer::class,'representative_id','id'); 
    }


}
