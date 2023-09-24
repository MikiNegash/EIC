<?php

namespace App\Models\Actor;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerFile extends Model
{
    use HasFactory;
    protected $table="customer_files";
    protected $id="id";
    protected $fillable = [
        "customer_id" ,"work_permit_file" ,"wp_expired_date",
        "wp_status", 	"investment_permit_file" ,	"ip_expired_date" ,	"ip_status",
        "residence_permit_file" ,	"rp_expired_date" ,	"rp_status" ,	"created_at" ,	"updated_at",
        "wp_expired_date" ,	"wp_status" ,	"investment_permit_file" ,	"ip_expired_date", 	"ip_status",
        "residence_permit_file",	"rp_expired_date", 	"rp_status" ,	"created_at", 	"updated_at"
    ];
    public function Customer()
    {
        return $this->belongsTo(Customer::class,'customer_id','id');
    }

}
