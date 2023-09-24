<?php

namespace App\Models\Base;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Actor\User;
class VisaType extends Model
{
    use HasFactory;
    protected $table='visa_type';
    protected $id='id';
    protected $fillable = ['name','added_by','created_at' ,'updated_at'];
    public function AddedBy()
    {
        return $this->belongsTo(User::class,'added_by','id');
    }
}
