<?php

namespace App\Models\Actor;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;


    protected $fillable = [
        'phone',
        'user_id',
        'country',
        'photo',
        'passport',
        'id_card',
        'country_type', "created_at", 	"updated_at"
    ];

    public function UserAccount()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function CustomerFile()
    {
        return $this->hasMany(CustomerFile::class,'customer_id','id');
    }
    public function CustomerVisa()
    {
        return $this->hasMany(CustomerVisa::class,'customer_id','id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
