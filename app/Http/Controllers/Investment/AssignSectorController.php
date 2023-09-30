<?php

namespace App\Http\Controllers\Investment;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Actor\Stakeholder;
use Illuminate\Http\Request;
use App\Models\Investment\InvestmentCommission;
use App\Models\Base\Region;
use App\Models\Base\Zone;
use App\Models\Investment\CommissionLicenceSector;
use App\Models\Investment\IndustryPark as InvestmentIndustryPark;
use App\Models\Investment\Sector;
use DateTime;
use Faker\Core\DateTime as CoreDateTime;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables as FacadesDataTables;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\JsonResponse;

use function Psy\debug;

class AssignSectorController extends Controller
{
    public function displayAssignSectorPage()
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
        
        return view("Investment.AssignSector",compact('regions','coms','stakeholders'));
    }

   
    public function view_sector(Request $request){
        $sectors = DB::table('lr_investment_sector')
        ->select('lr_investment_sector.name','lr_investment_sector.id')
        ->join('commission_licence_sector','commission_licence_sector.subsector_id','=','lr_investment_sector.id')
        ->where('commission_licence_sector.investment_commission_id', $request->id)
        ->get();

        $unassigned = DB::table('lr_investment_sector')
        ->select('lr_investment_sector.name','lr_investment_sector.id')
        ->whereNotIn('lr_investment_sector.id',function($query) {

            $query->select('commission_licence_sector.subsector_id')->from('commission_licence_sector');
         
         })->get();//)
       // ->Join('commission_licence_sector','commission_licence_sector.subsector_id','=','lr_investment_sector.id')
        //->where('commission_licence_sector.investment_commission_id', $request->id)
        //->get();

        return new JsonResponse (['assigned'=>$sectors,'unassigned'=>$unassigned]);
       /*  return FacadesDataTables::of($sectors)
        ->addIndexColumn()

        ->addColumn('Assigned Sectors', function($row){  
                return $row->name;
         })
        ->rawColumns(['Assigned Sectors'])

        ->make(true);   */     

      
    }

    public function submitSector(Request $request)
    {
      /*   if(!Auth::user() || !Auth::user()->hasPermissionWithName("edit_item"))
            {
                    return view("errors.role_permission_error");
            } */
            $assignSector = new CommissionLicenceSector();
            $assignSector->investment_commission_id = $request->invid;
            $assignSector->subsector_id=$request->sectorid;
            $assignSector->added_by=Auth::user()->id;
            $assignSector->created_at= new DateTime();
            $assignSector->save();

            $sectors = DB::table('lr_investment_sector')
            ->select('lr_investment_sector.name','lr_investment_sector.id')
            ->join('commission_licence_sector','commission_licence_sector.subsector_id','=','lr_investment_sector.id')
            ->where('commission_licence_sector.investment_commission_id', $request->invid)
            ->get();
    
            $unassigned = DB::table('lr_investment_sector')
            ->select('lr_investment_sector.name','lr_investment_sector.id')
            ->whereNotIn('lr_investment_sector.id',function($query) {
    
                $query->select('commission_licence_sector.subsector_id')->from('commission_licence_sector');
             
             })->get();//)
           // ->Join('commission_licence_sector','commission_licence_sector.subsector_id','=','lr_investment_sector.id')
            //->where('commission_licence_sector.investment_commission_id', $request->id)
            //->get();
    
            return new JsonResponse (['assigned'=>$sectors,'unassigned'=>$unassigned]);
         
    }
    public function deleteSector($delName)
    {
      /*   if(!Auth::user() || !Auth::user()->hasPermissionWithName("edit_item"))
            {
                    return view("errors.role_permission_error");
            } */
            

            $sector = DB::table('lr_investment_sector')
            ->select('lr_investment_sector.name','lr_investment_sector.id')
            ->where('r_investment_sector.name', $delName)
            ->get();

            $assignSector = new CommissionLicenceSector();
            $assignSector = DB::table('commission_licence_sector')
            ->select('commission_licence_sector.id')
            ->where('commission_licence_sector.subsector_id', $sector->id)
            ->get();

            $liSec = CommissionLicenceSector::find($assignSector->id);
            if ($liSec) {
                $liSec->delete();
                return response()->json(['success' => true]);
            }
    }
    
    function load_AssignedSector()
    {
       /*  if(!Auth::user() || !Auth::user()->hasPermissionWithName("view_users"))
        {
            return "";
        } */
        
        $assignSector = new CommissionLicenceSector();    
        $data = InvestmentCommission::with('CommissionLicenceSector')->get();//$assignSector->AssignSectorFindAll();
        //$data = InvestmentCommission::latest()->where('user_type','user')->orderBy("name","ASC")->get();

        return FacadesDataTables::of($data)
            ->addIndexColumn()

            ->addColumn('Investment commission', function($row){
              
              
                    return $row->name;

             })
            ->addColumn('Assigned Sectors', function($row){  
        /*         if( $row->CommissionLicenceSector != null){
                    return  $row->CommissionLicenceSector->investment_commision_id ;
                }else{
                    return 'No Assign Sectors';
                } */
              
                if($row->CommissionLicenceSector != null)   {
                    $subsectors = DB::table('commission_licence_sector')->where('investment_commission_id', $row->CommissionLicenceSector->investment_commission_id)->get();
                    return count($subsectors).' Assigned Sectors';
                
                }  else{
                    return 'No Assigned Sectors find';
                }    
               
               

            })
            


            ->rawColumns(['Investment commission','Assigned Sectors'])

            ->make(true);

    }
   
}