<?php

namespace App\Models\Investment;

use App\Models\Actor\Stakeholder;
use App\Models\Base\Woreda;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommissionLicenceSector extends Model
{
    use HasFactory;
    protected $table='commission_licence_sector';
    protected $id='id';
    protected $fillable = ['investment_commission_id','subsector_id','added_by','created_at','updated_at'];
    public function InvestmentCommission()
    {
        return $this->belongsTo(InvestmentCommission::class,'investment_commission_id','id');
    }
    public function Sector()
    {
        return $this->belongsTo(Sector::class,'subsector_id','id');
    }
    public function AssignSectorFindAll()
    {
        return self::all(['id','investment_commission_id','subsector_id','added_by','created_at','updated_at']);
    }

}
