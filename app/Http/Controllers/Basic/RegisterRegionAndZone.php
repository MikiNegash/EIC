<?php

namespace App\Http\Controllers\Basic;

use App\Http\Controllers\Controller;
use App\Models\Base\Region;
use App\Models\Base\Zone;
use App\Models\Base\Woreda;
use Illuminate\Http\JsonResponse;
use App\Models\Actors\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use DataTables;




class RegisterRegionAndZone extends Controller
{
    public function dashboard()
    {
        return view("index2");
    }
    // Region Management Page
    public function Regionpages()
    {
        if(!Auth::user() || !Auth::user()->hasPermissionWithName("region_page"))
            {
                    return view("errors.role_permission_error");
            }
        return view('basic.region');
    }
      //Region Registration
    public function registerRegions(Request $request)
    {
        if(!Auth::user() || !Auth::user()->hasPermissionWithName("region_registration"))
            {
                    return view("errors.role_permission_error");
            }
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'code' => 'required',
                'type' => 'required|in:Chartered_city,Regional_city',
                'created_by'=>'required|exists:users,id'
            ]);
        
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

    //View Region
    public function getRegions()
    {
        if(!Auth::user() || !Auth::user()->hasPermissionWithName("list_of_region"))
            {
                    return view("errors.role_permission_error");
            }
        $region = Region::select('id', 'name','code','type')->get();
        return DataTables::of($region)   
            ->make(true);
    }

           //Region Registration
    public function register_regions(Request $request)
    {
        if(!Auth::user() || !Auth::user()->hasPermissionWithName("register_region"))
       {
            return view("errors.role_permission_error");
       }
       
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'code' => 'required',
            'type' => 'required|in:Chartered_city,Regional_city',
            'created_by'=>'required|exists:users,id'
        ]);

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

    // Delete Regions
    public function destroy_regions(string $id)
    {
        if(!Auth::user() || !Auth::user()->hasPermissionWithName("delete_region"))
            {
                    return view("errors.role_permission_error");
            }
      
        try 
            {
                Region::destroy($id);
                return response()->json(['message' => 'Region deleted successfully']);
            } 
        catch (QueryException $e) 
            {
                return response()->json(['errors' => ['name' => ['Cannot Delete this Region.']]], 422);
            }
         catch (\Exception $e) 
            {
                return response()->json(['errors' => ['name' => ['Cannot Delete this Region.']]], 422);
            }
    }
 //Edit Region
 public function update_regions(Request $request,$id)
    {
        if(!Auth::user() || !Auth::user()->hasPermissionWithName("update_region"))
        {
            return view("errors.role_permission_error");
        }    
            $validatedData = $request->validate([
                'name' => 'required',
                'code' => 'required',
                'type' => 'required|in:Chartered_city,Regional_city',
            ]);

            $region = Region::findOrFail($id);
            $result = $region->update($validatedData);
            return response()->json(['message' => 'Region is updated successfully']);         
    }
        //ZONE METHODS
    public function Zonepages()
    {
        if(!Auth::user() || !Auth::user()->hasPermissionWithName("zone_page"))
            {
                    return view("errors.role_permission_error");
            }
        return view('basic.Zone');
    }

    //Register Zone
public function registerZones(Request $request)
    {
        if(!Auth::user() || !Auth::user()->hasPermissionWithName("zone_registration"))
       {
            return view("errors.role_permission_error");
       }
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'region_id' => 'required|exists:region,id',
            'created_by'=>'required|exists:users,id'
        ]);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
        $data = $request->validate([
            'name' => 'required',
            'region_id' => 'required|exists:region,id',
            'created_by'=>'required|exists:users,id'
        ]);
        Zone::create($data);
        return response()->json(['message' => 'Zone registered successfully']);
    }

    public function getZones()
    {
        if (!Auth::user() || !Auth::user()->hasPermissionWithName("list_of_zone")) {
            return view("errors.role_permission_error");
        }

        $zones = Zone::with(['region:id,name'])->select('id', 'name', 'region_id', 'created_by')->get();
    return DataTables::of($zones)
        ->editColumn('region_id', function ($zone) {
            return $zone->region->name; 
        })
        ->make(true);
    }

    public function destroy_zones(string $id)
    {
        if(!Auth::user() || !Auth::user()->hasPermissionWithName("delete_zone"))
            {
                    return view("errors.role_permission_error");
            }
      
        try 
            {
                Zone::destroy($id);
                return response()->json(['message' => 'Zone deleted successfully']);
            } 
        catch (QueryException $e) 
            {
                return response()->json(['errors' => ['name' => ['Cannot Delete this Zone.']]], 422);
            }
         catch (\Exception $e) 
            {
                return response()->json(['errors' => ['name' => ['Cannot Delete this Zone.']]], 422);
            }
    }
    public function update_zones(Request $request,$id)
    {
        if(!Auth::user() || !Auth::user()->hasPermissionWithName("update_zone"))
        {
            return view("errors.role_permission_error");
        }    
            $validatedData = $request->validate([
                'name' => 'required',
                'region_id' => 'required|exists:region,id',
            ]);

            $zone = Zone::findOrFail($id);
            $result = $zone->update($validatedData);
            return response()->json(['message' => 'Zone is updated successfully']);         
    }

       //WOREDAS METHODS

       // Woreda Page

       public function woredapages()
    {
        if(!Auth::user() || !Auth::user()->hasPermissionWithName("woreda_page"))
            {
                return view("errors.role_permission_error");
            }
        return view('basic.Woreda');
    }
    // REGISTER WOREDA
    public function registerWoredas(Request $request)
    {
        if(!Auth::user() || !Auth::user()->hasPermissionWithName("woreda_registration"))
       {
            return view("errors.role_permission_error");
       }
       
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'zone_id' => 'required|exists:zone,id',
            'created_by'=>'required|exists:users,id'
        ]);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
        $data = $request->validate([
            'name' => 'required',
            'zone_id' => 'required|exists:zone,id',
            'created_by'=>'required|exists:users,id'
        ]);
        Woreda::create($data);
        return response()->json(['message' => 'Woreda registered successfully']);
    }
    
    // WOREDA LIST
    public function getWoredas()
    {
        if (!Auth::user() || !Auth::user()->hasPermissionWithName("list_of_woreda")) {
            return view("errors.role_permission_error");
        }

        $woredas = Woreda::with(['zone:id,name'])->select('id', 'name', 'zone_id', 'created_by')->get();
    return DataTables::of($woredas)
        ->editColumn('zone_id', function ($woreda) {
            return $woreda->zone->name; 
        })
        ->make(true);
    }

    // Updat Woredas
    public function update_woredas(Request $request,$id)
    {
        if(!Auth::user() || !Auth::user()->hasPermissionWithName("update_woreda"))
        {
            return view("errors.role_permission_error");
        }    
            $validatedData = $request->validate([
                'name' => 'required',
                'zone_id' => 'required|exists:zone,id',
            ]);

            $woreda = Woreda::findOrFail($id);
            $result = $woreda->update($validatedData);
            return response()->json(['message' => 'Woreda is updated successfully']);         
    }

    // DELETE WOREDA
    public function destroy_woredas(string $id)
    {
        if(!Auth::user() || !Auth::user()->hasPermissionWithName("delete_woreda"))
            {
                    return view("errors.role_permission_error");
            }
      
        try 
            {
                Woreda::destroy($id);
                return response()->json(['message' => 'Woreda deleted successfully']);
            } 
        catch (QueryException $e) 
            {
                return response()->json(['errors' => ['name' => ['Cannot Delete this Woreda.']]], 422);
            }
         catch (\Exception $e) 
            {
                return response()->json(['errors' => ['name' => ['Cannot Delete this Woreda.']]], 422);
            }
    }

}
