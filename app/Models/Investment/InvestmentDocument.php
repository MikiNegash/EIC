<?php

namespace App\Models\Investment;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvestmentDocument extends Model
{
    use HasFactory;
    protected $table='investement_documents';
    protected $id='id';
    protected $fillable = ['investment_id','document_path','status','comment','created_at','updated_at'];
    public function Investment()
    {
        return $this->belongsTo(Investment::class,'investment_id','id');
    }
   

}
