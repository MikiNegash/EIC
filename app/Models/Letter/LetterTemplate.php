<?php

namespace App\Models\Letter;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Actor\User;

class LetterTemplate extends Model
{
    use HasFactory;
    protected $table='letter_template';
    protected $id='id';
    protected $fillable = ['letter_code_id','description','added_by','updated_by','subject','conclusion','created_at','updated_at'];
    public function LetterCode()
    {
        return $this->belongsTo(LetterCode::class,'letter_code_id','id');
    }
    public function AddedBy()
    {
        return $this->belongsTo(User::class,'added_by','id');
    }
    public function UpdatedBy()
    {
        return $this->belongsTo(User::class,'updated_by','id');
    }
}

