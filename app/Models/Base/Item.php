<?php

namespace App\Models\Base;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Actor\User;
class Item extends Model
{
    use HasFactory;
    protected $table='items';
    protected $id='id';
    protected $fillable = ['name','created_by','type','created_at' ,'updated_at'];
    public function CreatedBy()
    {
        return $this->belongsTo(User::class,'created_by','id');
    }
    public function getItem_or_material($condition)
    {
    
            // Apply the condition to the query
            $query=self::where('type', $condition)->select('id', 'name')->get();
            return $query;
    }
}
