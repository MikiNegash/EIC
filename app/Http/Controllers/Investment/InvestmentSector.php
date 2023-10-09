<?php

namespace App\Http\Controllers\Investment;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Investment\InvestmentCommission;
use App\Models\Base\Region;
use App\Models\Investment\Sector;
use DataTables;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables as FacadesDataTables;

use function Psy\debug;

class InvestmentSector extends Controller
{
    public function displayinvestmentSector()
    {
       /*  if(!Auth::user() || !Auth::user()->hasPermissionWithName("investmentcommissionsreg"))
        {
            return view("errors.role_permission_error");
        } */
        $allSectors = new Sector();
        $sectors = Sector::where('parent_id', '=', 0)->get();
        $allSectors = Sector::pluck('name','id')->all();
        return view('Investment.investemntSector',compact('sectors','allSectors'));
          
        
    }
    
    public function addSector(Request $request)
    {
       /*  $this->validate($request, [
        		'name' => 'required',
                'type' => 'required',
        	]); */
            //$pname = DB::table('lr_investment_sector')->where('name', $request->parent_name)->get();
            $sector = new Sector();
            $sector->parent_id = $request->selectSector_id;
            $sector->type = $request->type;
            $sector->name = $request->name;
            $sector->added_by = Auth::user()->id;
            $sector->status = 1;
            $sector->save();
       /*  $input = $request->all();
        $input['parent_id'] = empty($input['parent_id']) ? 0 : $input['parent_id'];
        
        Sector::create($input); */
        return back()->with('success', 'New sector added successfully.');
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

   
}