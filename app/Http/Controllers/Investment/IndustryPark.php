<?php

namespace App\Http\Controllers\Investment;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Actor\Stakeholder;
use Illuminate\Http\Request;
use App\Models\Investment\InvestmentCommission;
use App\Models\Base\Region;
use App\Models\Base\Zone;
use App\Models\Investment\IndustryPark as InvestmentIndustryPark;
use DateTime;
use Faker\Core\DateTime as CoreDateTime;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables as FacadesDataTables;
use Illuminate\Support\Facades\Validator;

use function Psy\debug;

class IndustryPark extends Controller
{
    public function displayIndustryParkPage()
    {
       /*  if(!Auth::user() || !Auth::user()->hasPermissionWithName("investmentcommissionsreg"))
        {
            return view("errors.role_permission_error");
        } */
    
    $regionInfo = new Region();    
    $regions = $regionInfo->RegionNameandId();

    $stakeholder = new Stakeholder();
    $stakeholders = $stakeholder -> StakeholderAll();

    $investInfo = new InvestmentCommission();    
        $data = $investInfo->InvestmentCommissionNameandId(); 
        $coms = $data;
        
        return view("Investment.IndustryPark",compact('regions','coms','stakeholders'));
    }


    public function zoneRender(Request $request)
    {
         
        $region_id = $request->region_id;
        //$zones = Zone::find($request->region_id);
        $zones = DB::table('Zone')->where('region_id', $request->region_id)->get();
       /*  $zones = Region::where('id',$region_id)
       ->with('Zone')
       ->get(); */
        return response()->json([
            'zones' => $zones
        ]);
    }

    public function woredaRender(Request $request)
    {
         
        //$region_id = $request->zone_id;
        //$zones = Zone::find($request->region_id);
        $woredas = DB::table('woreda')->where('zone_id', $request->zone_id)->get();
       /*  $zones = Region::where('id',$region_id)
       ->with('Zone')
       ->get(); */
        return response()->json([
            'woredas' => $woredas
        ]);
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


    function submitIndustryPark(Request $request)
    {
        /* if(!Auth::user() || !Auth::user()->hasPermissionWithName("register_other_visa"))
        {
            return "";
        } */
       // $ismain=1;
      /*  $formData1 = [$request->woreda_id,$request->name,$request->stakeholder_id];
       $validationRules1 = [
        'woreda' => 'required',
        'name' => 'required',
        'stakeholder' => 'required',
       
    ]; */
      // $validator1 = Validator::make($formData1, $validationRules1);

     /*   if ($validator1->fails()) {
           return response()->json(['errors' => $validator1->errors()], 400);
       }else{ */
       // $createAt = new DateTime.now();
        $industryPark = new InvestmentIndustryPark();
        $industryPark->name=$request->name;
        $industryPark->woreda_id=$request->woreda_id;
        $industryPark->stakeholder_id=$request->stakeholder_id;
        $industryPark->status=1;
        $industryPark->created_at;
        $industryPark->added_by=Auth::user()->id;
        $industryPark->save();
      return response()->json(['message' => 'Industry Park registered successfully']);

    //   }

    
    }

    function load_IndustyPark()
    {
       /*  if(!Auth::user() || !Auth::user()->hasPermissionWithName("view_users"))
        {
            return "";
        } */

        
        $industryInfo = new InvestmentIndustryPark();    
        $data = $industryInfo->IndustryparkAll();
        //$data = InvestmentCommission::latest()->where('user_type','user')->orderBy("name","ASC")->get();

        return FacadesDataTables::of($data)
            ->addIndexColumn()

            ->addColumn('name', function($row){
              
              
                    return '<table><tr><td style="padding:0px;padding-left:15px">'.$row->name.'</td></tr></table>';

             })
            ->addColumn('Region', function($row){
                return '<table><tr><td style="padding:0px;padding-left:15px">'.$row->woreda->zone->region->name.'</td></tr></table>';

            })
            ->addColumn('Zone', function($row){
                return '<table><tr><td style="padding:0px;padding-left:15px">'.$row->woreda->zone->name.'</td></tr></table>';

             })
            ->addColumn('Woreda', function($row){
                return '<table><tr><td style="padding:0px;padding-left:15px">'.$row->woreda->name.'</td></tr></table>';

            })
            ->addColumn('registered_by', function($row){
                return '<table><tr><td style="padding:0px;padding-left:15px">'.$row->registered_by.'</td></tr></table>';

            })
            ->addColumn('status', function($row){
                return '<table><tr><td style="padding:0px;padding-left:15px">'.$row->status.'</td></tr></table>';
  
            })


            ->rawColumns(['name','Region','Zone','Woreda','registered_by','status'])

            ->make(true);

    }
   
}