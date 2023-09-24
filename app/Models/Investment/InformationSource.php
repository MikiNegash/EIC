<?php

namespace App\Models\Investment;

use App\Models\Actor\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformationSource extends Model
{
    use HasFactory;
    protected $table='info_source';
    protected $id='id';
    protected $fillable = ['source','added_by','created_at','updated_at'];
    public function AddedBy()
    {
        return $this->belongsTo(User::class,'added_by','id');
    }
}
