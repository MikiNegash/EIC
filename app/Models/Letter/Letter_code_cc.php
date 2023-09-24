<?php

namespace App\Models\Letter;

use App\Models\Actor\MainStakeholder;
use App\Models\Actor\Stakeholder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Letter_code_cc extends Model
{
    use HasFactory;

    protected $table='letter_code_cc';

    protected $id='id';

    protected $fillable = [
                            'letter_code_id','stakeholder_id','main_stakeholder_id','created_at','updated_at'
                          ];

    public function CopyTo()
    {
        return $this->hasMany(LetterCode::class,'letter_code_id','id');
    }
    public function Stakeholder()
    {
        return $this->hasMany(Stakeholder::class,'stakeholder_id','id');
    }
    public function MainStakeholder()
    {
        return $this->hasMany(MainStakeholder::class,'main_stakeholder_id','id');
    }

}
