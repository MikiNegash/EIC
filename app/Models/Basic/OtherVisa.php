<?php

namespace App\Models\Basic;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Actor\User;
class OtherVisa extends Model
{
    use HasFactory;
    protected $table='other_visa';
    protected $id='id';
    protected $fillable = [ 'type','added_by','updated_by', 'created_at', 'updated_at'];
    public function AddedBy()
    {
        return $this->belongsTo(User::class,'added_by','id');
    }
    public function UpdatedBy()
    {
        return $this->belongsTo(User::class,'updated_by','id');
    }
}
