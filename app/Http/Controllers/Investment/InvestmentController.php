<?php

namespace App\Http\Controllers\Investment;

use App\Models\Investment\LrImpactAndMitigation;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Actor\Stakeholder;
use Illuminate\Http\Request;
use App\Models\Investment\InvestmentCommission;
use App\Models\Base\Region;
use App\Models\Investment\IndustryPark as InvestmentIndustryPark;
use App\Models\Investment\Investment;
use App\Models\Investment\LrInvestmentBranchs as InvestmentLrInvestmentBranchs;
use App\Models\Investment\LrProjectActions as InvestmentLrProjectActions;
use App\Models\Investment\Sector;
use Yajra\DataTables\Facades\DataTables as FacadesDataTables;



class InvestmentController extends Controller
{
    public function displayInvestmentPage()
    {
        /*  if(!Auth::user() || !Auth::user()->hasPermissionWithName("investmentcommissionsreg"))
        {
            return view("errors.role_permission_error");
        } */

        $regionInfo = new Region();
        $regions = $regionInfo->RegionNameandId();

        $stakeholder = new Stakeholder();
        $stakeholders = $stakeholder->StakeholderAll();

        $investInfo = new InvestmentCommission();
        $data = $investInfo->InvestmentCommissionNameandId();
        $coms = $data;

        $activitys = new Sector();

        $activitys = Sector::where('type', 'activity')->get();
        $allSectors = new Sector();
        $sectors = Sector::where('parent_id', '=', 0)->get();
        $allSectors = Sector::pluck('name','id')->all();

       // $activitys = DB::table('lr_investment_sector')->select('id','name')->where('type','=','activity'); //$activity->InvestmentCommissionNameandId();

        return view("Investment.ApplyLicense", compact('regions', 'coms', 'stakeholders','activitys','sectors','allSectors'));
    }

    function submitGeneralInfo(Request $request)
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
        $industryPark->name = $request->name;
        $industryPark->woreda_id = $request->woreda_id;
        $industryPark->stakeholder_id = $request->stakeholder_id;
        $industryPark->status = 1;
        $industryPark->created_at;
        $industryPark->added_by = Auth::user()->id;
        $industryPark->save();
        return response()->json(['message' => 'Industry Park registered successfully']);

        //   }


    }

    function checkBranch(Request $request)
    {
        $subsector = InvestmentLrInvestmentBranchs::where('investment_id', $request->investID)->get();
        return $subsector;

    }

    function load_Investment()
    {
        /*  if(!Auth::user() || !Auth::user()->hasPermissionWithName("view_users"))
        {
            return "";
        } */


        $invInfo = new Investment();
        $data = $invInfo->InvestmentAll();
        //$data = InvestmentCommission::latest()->where('user_type','user')->orderBy("name","ASC")->get();

        return FacadesDataTables::of($data)
            ->addIndexColumn()

            ->addColumn('Investment Type', function ($row) {


                return '<table><tr><td style="padding:0px;padding-left:15px">' . $row->investment_type . '</td></tr></table>';
            })
            ->addColumn('Company Name', function ($row) {
                return '<table><tr><td style="padding:0px;padding-left:15px">' . $row->company_name . '</td></tr></table>';
            })
            /*   ->addColumn('SubSector', function($row){
                $subsector = DB::table('lr_investment_sector')->select('name')->where('id','=',$row->subsector_id);
                return '<table><tr><td style="padding:0px;padding-left:15px">'.$subsector.'</td></tr></table>';

             }) */
            ->rawColumns(['Investment Type', 'Company Name',])

            ->make(true);
    }


    function load_ProjectActions()
    {
        /*  if(!Auth::user() || !Auth::user()->hasPermissionWithName("view_users"))
        {
            return "";
        } */


        $invInfo = new InvestmentLrProjectActions();
        $data = $invInfo->all();
        //$data = InvestmentCommission::latest()->where('user_type','user')->orderBy("name","ASC")->get();
        return FacadesDataTables::of($data)
            ->addIndexColumn()

            ->addColumn('Actions', function ($row) {

                $subactions = json_decode($row->sub_actions);
                $lst = '';
                for ($i=0;$i < count($subactions);$i++){
                    $lst = $lst.'<li>'.$subactions[$i].'</li>';
                }

                return '<table><tr><td >' . $row->action .
                    '<ul>'
               .$lst.
                '</ul>
                </td></tr></table>';
            })


            ->rawColumns(['Actions'])

            ->make(true);
    }
}
