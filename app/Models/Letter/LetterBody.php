<?php

namespace App\Models\Letter;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LetterBody extends Model
{
    use HasFactory;
    protected $table='letter_body';
    protected $id='id';
    protected $fillable = ['letter_id','content','content_type','created_at','updated_at'];
    public function Letter()
    {
        return $this->belongsTo(Letter::class,'letter_id','id');
    }
}
