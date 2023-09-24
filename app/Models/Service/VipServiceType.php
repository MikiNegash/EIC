<?php

namespace App\Models\Service;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Actor\User;
class VipServiceType extends Model
{
    use HasFactory;
    protected $table='vip_service_type';
    protected $id='id';
    protected $fillable = ['service','added_by','created_at','updated_at'];
    public function AddedBy()
    {
        return $this->belongsTo(User::class,'added_by','id');
    }
    public static function getIdAndService()
    {
        return self::all(['id', 'service']);
    }
}
