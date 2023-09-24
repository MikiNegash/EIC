<?php

namespace App\Models\Actor;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserImage extends Model
{
    use HasFactory;
    protected $table='user_image';
    protected $id='id';
    protected $fillable = ['user_id','approved_photo','uploaded_photo','approved_by','last_approve','comment','created_at','updated_at'];

    public function User()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function ApprovedBy()
    {
        return $this->belongsTo(User::class,'approved_by','id');
    }

}
