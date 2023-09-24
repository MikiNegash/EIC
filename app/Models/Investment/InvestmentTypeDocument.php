<?php

namespace App\Models\Investment;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvestmentTypeDocument extends Model
{
    use HasFactory;
    protected $table='investment_type_documents';
    protected $id='id';
    protected $fillable = ['document_type_id','investment_type_id','is_mandatory','added_by','created_at','updated_at'];
    public function DocumentType()
    {
        return $this->belongsTo(DocumentType::class,'document_type_id','id');
    }
    public function InvestmentType()
    {
        return $this->belongsTo(InvestmentType::class,'investment_type_id','id');
    }
}
