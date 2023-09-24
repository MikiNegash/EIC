<?php

namespace App\Models\Letter;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Actor\Stakeholder;

class LetterCopy extends Model
{
    use HasFactory;
    protected $table='letter_copy';
    protected $id='id';
    protected $fillable = ['letter_id','stakeholder_id','created_at','updated_at'];
    public function Stakeholder()
    {
        return $this->belongsTo(Stakeholder::class,'stakeholder_id','id');
    }
    public function Letter()
    {
        return $this->belongsTo(Letter::class,'letter_id','id');
    }
}
