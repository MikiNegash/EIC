<?php

namespace App\Http\Controllers\Investment;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Investment\InvestmentCommission;
use App\Models\Investment\Shareholder;
use App\Models\Base\Region;
use App\Models\Base\Zone;
use App\Models\Base\Woreda;
use App\Models\Base\MeasurementUnit;
use App\Models\Investment\RawMaterial;
use App\Models\Investment\CompanyName;
use App\Models\Investment\InvestmentActivities;
use App\Models\Investment\ImpactMitigation;
use App\Models\Investment\InvestmentDocument;
use App\Models\Investment\InvestmentAddress;
use App\Models\Investment\InvestmentDetail;
use App\Models\Investment\AnnualProduction;
use App\Models\Actor\Customer;
use App\Models\Actor\Company_representative;
use App\Models\Actor\Investors;
use App\Models\Base\Item;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Storage;
use DataTables;
use Yajra\DataTables\Facades\DataTables as FacadesDataTables;

use function Psy\debug;

class InvestmentCommissonRegistration extends Controller
{
    public function displayInvestmentRegistrationPage()
    {
       /*  if(!Auth::user() || !Auth::user()->hasPermissionWithName("investmentcommissionsreg"))
        {
            return view("errors.role_permission_error");
        } */
    
    $regionInfo = new Region();    
    $regions = $regionInfo->RegionNameandId();
    $investInfo = new InvestmentCommission();    
        $data = $investInfo->InvestmentCommissionNameandId(); 
        $coms = $data;
        
        return view("Investment.investmentcommissionsreg",compact('regions','coms'));
    }


    public function update_invCom(Request $request)
    {
      /*   if(!Auth::user() || !Auth::user()->hasPermissionWithName("edit_item"))
            {
                    return view("errors.role_permission_error");
            } */
            $investmentCommision = new InvestmentCommission();
            $investmentCommision->id = $request->edit_id;
            $investmentCommision->name=$request->edit_name;
            $investmentCommision->code=$request->edit_code;
            $investmentCommision->updated_by=Auth::user()->id;
            $investmentCommision->type=$request->edit_types;
            $investmentCommision->region_id=$request->edit_region;
            $investmentCommision->is_main=1;
            $investmentCommision->updated_at=$request->created_at;
      
              $invUpdate = InvestmentCommission::find($investmentCommision->id);
             /*  $invUpdate->update($investmentCommision->all()); */

              $invUpdate->update([
                'name' =>  $investmentCommision->name,
                'code' => $investmentCommision->code,
                'updated_by' => Auth::user()->id,
                'type' => $investmentCommision->type,
                'region_id' => $investmentCommision->region_id,                
                'updated_at' => $investmentCommision->updated_at
            ]);
              return redirect()->route('invest.view')
                ->with('success', 'Investment Commission updated successfully.');
    }


    function submitInvestmentCommission(Request $request)
    {
        /* if(!Auth::user() || !Auth::user()->hasPermissionWithName("register_other_visa"))
        {
            return "";
        } */
        $ismain=1;
        $investmentCommision = new InvestmentCommission();
        $investmentCommision->name=$request->name;
        $investmentCommision->code=$request->code;
        $investmentCommision->registered_by=Auth::user()->id;
        $investmentCommision->type=$request->types;
        $investmentCommision->region_id=$request->region;
        $investmentCommision->is_main=$ismain;
        $investmentCommision->created_at=$request->created_at;
        $investmentCommision->save();
      
      return response()->json(['message' => 'Investment type registered successfully']);

    }

    function load_investmentCommission()
    {
       /*  if(!Auth::user() || !Auth::user()->hasPermissionWithName("view_users"))
        {
            return "";
        } */

        
        $investInfo = new InvestmentCommission();    
        $data = $investInfo->InvestmentCommissionNameandId();
        //$data = InvestmentCommission::latest()->where('user_type','user')->orderBy("name","ASC")->get();

        return FacadesDataTables::of($data)
            ->addIndexColumn()

            ->addColumn('name', function($row){
              
              
                    return '<table><tr><td style="padding:0px;padding-left:15px">'.$row->name.'</td></tr></table>';

             })
            ->addColumn('code', function($row){
                return '<table><tr><td style="padding:0px;padding-left:15px">'.$row->code.'</td></tr></table>';

            })
            ->addColumn('type', function($row){
                return '<table><tr><td style="padding:0px;padding-left:15px">'.$row->type.'</td></tr></table>';

             })
            ->addColumn('region', function($row){
                return '<table><tr><td style="padding:0px;padding-left:15px">'.$row->region.'</td></tr></table>';

            })
            ->addColumn('registered_by', function($row){
                return '<table><tr><td style="padding:0px;padding-left:15px">'.$row->registered_by.'</td></tr></table>';

            })
            ->addColumn('status', function($row){
                return '<table><tr><td style="padding:0px;padding-left:15px">'.$row->status.'</td></tr></table>';
  
            })


            ->rawColumns(['name','code','type','region','registered_by','status'])

            ->make(true);

    }
   
}