<?php

namespace App\Models\Service;

use App\Models\Letter\Letter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VipServiceLetter extends Model
{
    use HasFactory;
    protected $table='vip_service_letters';
    protected $id='id';
    protected $fillable = ['vip_service_id', 'letter_id','created_at','updated_at'];
    public function Letter()
    {
        return $this->belongsTo(Letter::class,'letter_id','id');
    }
    public function VipService()
    {
        return $this->belongsTo(VipService::class,'vip_service_id','id');
    }
    public function saveVipServiceLetter($requestData)
    {

        $this->fill($requestData);
        $this->save();
        return $this;
    }
}
