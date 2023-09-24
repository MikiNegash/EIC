<?php

namespace App\Models\Investment;

use App\Models\Actor\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocumentType extends Model
{
    use HasFactory;
    protected $table='document_type';
    protected $id='id';
    protected $fillable = ['name','added_by','created_at','updated_at'];
    public function AddedBy()
    {
        return $this->belongsTo(User::class,'added_by','id');
    }
}
