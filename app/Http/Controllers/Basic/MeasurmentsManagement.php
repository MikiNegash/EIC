<?php

namespace App\Http\Controllers\Basic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Base\MeasurementUnit;
use DataTables;



class MeasurmentsManagement extends Controller
{
    public function measurementPage(Request $request)
    {
        if(!Auth::user() || !Auth::user()->hasPermissionWithName("measurement_page"))
            {
                    return view("errors.role_permission_error");
            }
         return view("basic.Measurement");

        
    }
    public function getMeasurements(Request $request)
    {
        if(!Auth::user() || !Auth::user()->hasPermissionWithName("list_of_measurement"))
            {
                    return view("errors.role_permission_error");
            }
        $measurement_units = measurementUnit::select('id', 'name')->get();
        return DataTables::of($measurement_units)   
            ->make(true);
    }
      
    public function update_measurements(Request $request)
        {
            if(!Auth::user() || !Auth::user()->hasPermissionWithName("update_measurement"))
                {
                        return view("errors.role_permission_error");
                }
            $validatedData = $request->validate([
                'id' => 'required',
                'name' => 'required',
            ]);

            $Data=['name'=>$validatedData['name']];
            $id=($validatedData['id']);
            $measurement = MeasurementUnit::findOrFail($id);
            $result = $measurement->update($Data);
            return response()->json(['message' => 'Measurement Unit is updated successfully']); 
        }
        public function destroy_measurements($id)
        {

            if(!Auth::user() || !Auth::user()->hasPermissionWithName("delete_measurement"))
                {
                        return view("errors.role_permission_error");
                }

          
            try 
                {
                    MeasurementUnit::destroy($id);
                    return response()->json(['message' => 'Measurement Unit is deleted successfully']); 
                } 
            catch (QueryException $e) 
                {
                    return redirect()->route('view_region')->with('error', 'Cannot delete the Item. It is related to other tables.');
                }
             catch (\Exception $e) 
                {
                    return redirect()->route('view_region')->with('error', 'Failed to delete the Item.');
                }
        }
        public function registerMeasurements(Request $request)
        {
            if(!Auth::user() || !Auth::user()->hasPermissionWithName("measurement_registration"))
                {
                        return view("errors.role_permission_error");
                }
            $validator = Validator::make($request->all(), [
                'name' => 'required|string|max:255',
                'created_by'=>'required|exists:users,id'
            ]);
    
            if ($validator->fails())
                {
                    return response()->json(['errors' => $validator->errors()], 422);
                }
            $existingMeasurement = MeasurementUnit::where('name', $request->name)->first();
    
            if ($existingMeasurement) 
                {
                    return response()->json(['errors' => ['name' => ['Item with the same name already exists.']]], 422);
                }
            MeasurementUnit::create(['name' => $request->name,'created_by' => $request->created_by]);
    
            return response()->json(['message' => 'Item registered successfully']);
           
        }
}
