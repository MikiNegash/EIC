<?php

namespace App\Models\Letter;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TemplateBody extends Model
{
    use HasFactory;
    protected $table='template_body';
    protected $id='id';
    protected $fillable = ['template_id','content_type','content','created_at','updated_at '];
    public function template()
    {
        return $this->belongsTo(LetterTemplate::class,'template_id','id');
    }
}
