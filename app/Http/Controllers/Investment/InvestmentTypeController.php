<?php

namespace App\Http\Controllers\Investment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\Investment\InvestmentType;
use DataTables;

class InvestmentTypeController extends Controller
{
     //investment type page
     public function InvestmentTypepage()
     {
         if(!Auth::user() || !Auth::user()->hasPermissionWithName("investment_type_page"))
             {
                     return view("errors.role_permission_error");
             }
         return view('Investment.InvestmentType');
     }
     //Register Investment Type
     public function registerInvestmentType(Request $request)
     {
         if(!Auth::user() || !Auth::user()->hasPermissionWithName("investment_type_page"))
         {
                 return view("errors.role_permission_error");
         }
         $validator = Validator::make($request->all(), [
             'name' => 'required|string|max:255',
             'created_by'=>'required|exists:users,id',
             'memorandum_type'=> 'required',
         ]);
 
         if ($validator->fails())
         {
             return response()->json(['errors' => $validator->errors()], 422);
         }
         $existingInvestmentType = InvestmentType::where('name', $request->name)->first();
 
         if ($existingInvestmentType) {
             return response()->json(['errors' => ['name' => ['Investment Type with the same name already exists.']]], 422);
         }
         InvestmentType::create(['name' => $request->name,'added_by' => $request->created_by,'investment_or_business'=>$request->memorandum_type]);
         return response()->json(['message' => 'Investment type registered successfully']);
     }
     // Investment Type List
     public function getInvestment_types(Request $request)
     {
         if(!Auth::user() || !Auth::user()->hasPermissionWithName("list_of_investment_type"))
             {
                     return view("errors.role_permission_error");
             }
         $investment_type = InvestmentType::select('id', 'name','investment_or_business')->get();
         return DataTables::of($investment_type)->addIndexColumn()
                  ->addColumn('investment_or_business', function($row){
                        if($row->memorandum_type=='BA')
                            {
                                return "Business Area";
                            }
                        else
                            {
                                return "Investment Type";
                            }
                    }) 
                 ->make(true);
     }
     //Delete Investment Type
     public function destroy_investment_types($id)
     {
        if(!Auth::user() || !Auth::user()->hasPermissionWithName("delete_Investment_type"))
            {
                    return view("errors.role_permission_error");
            }
        try 
            {
                InvestmentType::destroy($id);
                return response()->json(['message' => 'Investment Type is deleted successfully']);
            } 
        catch (QueryException $e) 
            {
                return response()->json(['errors' => ['name' => ['Error to Delete Investment Type.']]], 422);
            }
         catch (\Exception $e) 
            {
                return response()->json(['errors' => ['name' => ['Error to Delete Investment Type.']]], 422);
            }
     }
       // Investment Type
     public function update_investment_type(Request $request,$id)
     {
        if(!Auth::user() || !Auth::user()->hasPermissionWithName("update_investment_type"))
        {
                return view("errors.role_permission_error");
        }
        $validatedData = $request->validate([
            'name' => 'required',
            'is_shareholders'=>'required',
            'memorandum_type'=>'required'
        ]);

        $investment_type = InvestmentType::findOrFail($id);
        $result = $investment_type->update($validatedData);
        return response()->json(['message' => 'Investment Type is updated successfully']); 
     }
}
