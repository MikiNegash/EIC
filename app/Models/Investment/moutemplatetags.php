<?php

namespace App\Models\Investment;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MouTemplateTags extends Model
{
    use HasFactory;
    protected $table='lr_moa_template_tags';
    protected $id='id'; 
    protected $fillable = ['title','tag','type','added_by','updated_by'];
 
    public function user()
    {
        return $this->belongsTo(User::class,'added_by','id');
    }
    public function MouTemplateTagsNameandId()
    {
        return self::all(['id','title','tag','type','added_by','updated_by']);
    }
  
   
}
