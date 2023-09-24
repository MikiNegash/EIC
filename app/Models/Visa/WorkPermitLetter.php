<?php

namespace App\Models\Visa;

use App\Models\Letter\Letter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkPermitLetter extends Model
{
    use HasFactory;
    protected $table='work_permit_letters';
    protected $id='id';
    protected $fillable = ['request_id','letter_id','created_at','updated_at'];
    public function WorkPermitRequest()
    {
        return $this->belongsTo(WorkPermitRequest::class,'request_id','id');
    }
    public function Letter()
    {
        return $this->belongsTo(Letter::class,'letter_id','id');
    }
}
