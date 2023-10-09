<?php

namespace App\Models\Investment;

use App\Models\Actor\Customer;
use App\Models\Actor\User;
use App\Models\Base\BusinessType;
use App\Models\Payment\Payment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investment extends Model
{
    use HasFactory;
    protected $table='lr_investments';
    protected $id='id';
    protected $fillable = ['investment_type','company_name','trade_name','ownership','foreign_company_id','info_source','capital',
                            'share_value','created_by','subsector_id','commission_id','bank_id','is_closed','status_changed_by',
                            'remark','created_at','updated_at'];
      
    public function CreatedBy()
    {
        return $this->belongsTo(User::class,'created_by','id');
    }
    public function SubSector()
    {
        return $this->belongsTo(Sector::class,'subsector_id','id');
    }
    public function Commission()
    {
        return $this->belongsTo(InvestmentCommission::class,'commission_id','id');
    }

    public function InvestmentAll()
    {
        return $this->all(['id','investment_type','company_name','trade_name','ownership','foreign_company_id','info_source','capital',
        'share_value','created_by','subsector_id','commission_id','bank_id','is_closed','status_changed_by',
        'remark','created_at','updated_at']);
    }

}
