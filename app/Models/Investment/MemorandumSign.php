<?php

namespace App\Models\Investment;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemorandumSign extends Model
{
    use HasFactory;
    protected $table='memorandum_sign';
    protected $id='id';
    protected $fillable = ['memorandum_id','is_signed','created_at','updated_at'];
    public function Memorandum()
    {
        return $this->belongsTo(NotarizationOfMemorandum::class,'memorandum_id','id');
    }
}
