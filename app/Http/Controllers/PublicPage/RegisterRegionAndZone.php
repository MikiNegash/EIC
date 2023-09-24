<?php

namespace App\Http\Controllers\Basic;

use App\Http\Controllers\Controller;
use App\Models\Base\Region;
use App\Models\Base\Zone;
use App\Models\Base\Woreda;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;




class RegisterRegionAndZone extends Controller
{

    public function register_regions(Request $request)
    {
        if(!Auth::user() || !Auth::user()->hasPermissionWithName("register_region"))
       {
            return view("errors.role_permission_error");
       }
       if ($request->isMethod('post'))
        {
                $validator = Validator::make($request->all(), [
                    'name' => 'required',
                    'code' => 'required',
                    'type' => 'required|in:Chartered_city,Regional_city',
                    'created_by'=>'required|exists:users,id'
                ]);
                dd($request->validator());
            
                if ($validator->fails()) {
                    return response()->json(['errors' => $validator->errors()], 422);
                }
                $data = $request->validate([
                    'name' => 'required',
                    'code' => 'required',
                    'type' => 'required|in:Chartered_city,Regional_city',
                    'created_by'=>'required|exists:users,id'
                ]);
                Region::create($data);
                return response()->json(['message' => 'Region registered successfully']);
        }
        else
        {
            return view('RegionandZone.RegionRegistrationForm');
        }
    }
    public function register_zones(Request $request)
    {
        if(!Auth::user() || !Auth::user()->hasPermissionWithName("register_zone"))
       {
           return view("errors.role_permission_error");
       }
       if ($request->isMethod('post'))
       {
            $validator = Validator::make($request->all(), 
            [
            'name' => 'required',
            'region_id' => 'required||exists:region,id',
            'created_by'=>'required|exists:users,id'
            ]);

            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()], 422);
            }
            $data = $request->validate([
                'name' => 'required',
                'region_id' => 'required||exists:region,id',
                'created_by'=>'required|exists:users,id'
            ]);
            Zone::create($data);
            return response()->json(['message' => 'Zone is registered successfully']);
       }
       else
       {
        $regions = Region::all();
        return view('RegionandZone.ZoneRegistrationForm',compact('regions'));
       }
    }
    public function createWoredas()
    {
        if(!Auth::user() || !Auth::user()->hasPermissionWithName("create_woreda"))
        {
            return view("errors.role_permission_error");
        }
        $zones = Zone::all();
        return view('RegionandZone.WoredaRegistrationForm',compact('zones'));
    }

    public function register_woredas(Request $request)
    {
        
        if(!Auth::user() || !Auth::user()->hasPermissionWithName("register_woreda"))
        {
            return view("errors.role_permission_error");
        }
        if ($request->isMethod('post'))
        {
            $validator = Validator::make($request->all(), [
            'name' => 'required',
            'zone_id' => 'required||exists:zone,id',
            'created_by'=>'required|exists:users,id'
            ]);
    
            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()], 422);
            }
            $data = $request->validate([
            'name' => 'required',
            'zone_id' => 'required||exists:zone,id',
            'created_by'=>'required|exists:users,id'
            ]);
            Woreda::create($data);
        }
        else
        {
            $zones = Zone::all();
            return view('RegionandZone.WoredaRegistrationForm',compact('zones'));
        }
    }
    public function view_regions()
    {
        if(!Auth::user() || !Auth::user()->hasPermissionWithName("view_region"))
        {
            return view("errors.role_permission_error");
        }
        $regions = Region::all();
        return view('RegionandZone.ViewRegion',compact('regions'));
    }
    public function edit_regions(Request $request,$id)
    {
        if(!Auth::user() || !Auth::user()->hasPermissionWithName("edit_region"))
        {
            return view("errors.role_permission_error");
        }    
        if ($request->isMethod('post'))
        {
            $validatedData = $request->validate([
                'name' => 'required',
                'code' => 'required',
                'type' => 'required|in:Chartered_city,Regional_city',
                'created_by'=>'required|exists:users,id'
            ]);

            $region = Region::findOrFail($id);
            $result = $region->update($validatedData);
            return response()->json(['message' => 'Region is updated successfully']);         
        } 
        else
        {
            $region = Region::findOrFail($id);
            return view('RegionandZone.EditRegion', compact('region'));
        }
       
    }
    public function delete_regions($id)
    {
        if(!Auth::user() || !Auth::user()->hasPermissionWithName("delete_region"))
            {
                return view("errors.role_permission_error");
            }
        try 
            {
                Region::destroy($id);
                return redirect()->route('view_region')->with('success', 'Region deleted successfully.');
            } 
        catch (QueryException $e) 
            {
                return redirect()->route('view_region')->with('error', 'Cannot delete the Region. It is related to other tables.');
            }
         catch (\Exception $e) 
            {
                return redirect()->route('view_region')->with('error', 'Failed to delete the Region.');
            }
    }
    public function delete_woredas($id)
    {
        if(!Auth::user() || !Auth::user()->hasPermissionWithName("delete_woreda"))
            {
                return view("errors.role_permission_error");
            }
        try 
            {
                Woreda::destroy($id);
                return redirect()->route('view_woreda')->with('success', 'Woreda deleted successfully.');
            } 
        catch (QueryException $e) 
            {
                return redirect()->route('view_woreda')->with('error', 'Cannot delete the Woreda. It is related to other tables.');
            }
         catch (\Exception $e) 
            {
                return redirect()->route('view_woreda')->with('error', 'Failed to delete the Woreda.');
            }
    }
    public function delete_zones($id)
    {
        if(!Auth::user() || !Auth::user()->hasPermissionWithName("delete_zone"))
            {
                return view("errors.role_permission_error");
            }
        try 
            {
                Zone::destroy($id);
                return redirect()->route('view_zone')->with('success', 'Zone deleted successfully.');
            } 
        catch (QueryException $e) 
            {
                return redirect()->route('view_region')->with('error', 'Cannot delete the Zone. It is related to other tables.');
            }
         catch (\Exception $e) 
            {
                return redirect()->route('view_region')->with('error', 'Failed to delete the Zone.');
            }
    }
    public function view_zones()
    {
        if(!Auth::user() || !Auth::user()->hasPermissionWithName("view_zone"))
        {
            return view("errors.role_permission_error");
        }
        $zones = Zone::all();
        return view('RegionandZone.ViewZone',compact('zones'));
    }
    public function edit_zones(Request $request,$id)
    {
        if(!Auth::user() || !Auth::user()->hasPermissionWithName("edit_zone"))
        {
            return view("errors.role_permission_error");
        }    
        if ($request->isMethod('post'))
        {
            $validatedData = $request->validate([
                'name' => 'required',
                'region_id' => 'required',
                'created_by'=>'required|exists:users,id'
            ]);

            $zones = Zone::findOrFail($id);
            $result = $zones->update($validatedData);
            return response()->json(['message' => 'Zone is updated successfully']);         
        } 
        else
        {
            $regions = Region::all();
            $zone = Zone::findOrFail($id);
            return view('RegionandZone.EditZone', compact('zone','regions'));
        }
       
    }
    public function view_woredas()
    {
        if(!Auth::user() || !Auth::user()->hasPermissionWithName("view_woreda"))
        {
            return view("errors.role_permission_error");
        }
        $woredas = Woreda::all();
        return view('RegionandZone.ViewWoreda',compact('woredas'));
    }
    public function edit_woredas(Request $request,$id)
    {
        
        if(!Auth::user() || !Auth::user()->hasPermissionWithName("edit_woreda"))
        {
            return view("errors.role_permission_error");
        }    
        if ($request->isMethod('post'))
        {
            $validatedData = $request->validate([
                'name' => 'required',
                'zone_id' => 'required',
                'created_by'=>'required|exists:users,id'
            ]);

            $woreda = Woreda::findOrFail($id);
            $result = $woreda->update($validatedData);
            return response()->json(['message' => 'Region is updated successfully']);         
        } 
        else
        {
            $zones = Zone::all();
            $woreda = Woreda::findOrFail($id);
            return view('RegionandZone.EditWoreda', compact('woreda','zones'));
        }          
    }
}
