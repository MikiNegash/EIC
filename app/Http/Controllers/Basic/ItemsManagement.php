<?php

namespace App\Http\Controllers\Basic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\Base\Item;
use App\Models\Actors\User;
use DataTables;
 


class ItemsManagement extends Controller
{
   
    public function page()
    {
        if(!Auth::user() || !Auth::user()->hasPermissionWithName("item_page"))
            {
                    return view("errors.role_permission_error");
            }
        return view('basic.Items');
    }

    public function registerItems(Request $request)
    {
        if(!Auth::user() || !Auth::user()->hasPermissionWithName("register_item"))
            {
                    return view("errors.role_permission_error");
            }
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'created_by'=>'required|exists:users,id',
            'items_or_material'=>'required'
        ]);

        if ($validator->fails())
        {
            return response()->json(['errors' => $validator->errors()], 422);
        }
        $existingItem = Item::where('name', $request->name)->first();
        if ($existingItem) {
            return response()->json(['errors' => ['name' => ['Item with the same name already exists.']]], 422);
        }
        Item::create(['name' => $request->name,'type' => $request->items_or_material,'created_by' => $request->created_by]);

        return response()->json(['message' => 'Item registered successfully']);

        
    }
    public function getItems(Request $request)
    {
            if (!Auth::user() || !Auth::user()->hasPermissionWithName("list_of_item")) {
                return view("errors.role_permission_error");
            }
            
            $items = Item::select('id', 'name', 'type')->get();
            
            // Define a mapping of type abbreviations to full messages
            $typeMapping = [
                'IR' => 'Item',
                'MR' => 'Material',
                // Add more abbreviations and their corresponding full messages
            ];
            
            // Replace the type abbreviation with the full message
            $items->transform(function ($item) use ($typeMapping) {
                if (isset($typeMapping[$item->type])) {
                    $item->type = $typeMapping[$item->type];
                }
                return $item;
            });
            
            return DataTables::of($items)
                ->make(true);
    }
    
    
    public function update_items(Request $request)
        {
            if(!Auth::user() || !Auth::user()->hasPermissionWithName("update_item"))
            {
                    return view("errors.role_permission_error");
            }
            $validatedData = $request->validate([
                'id' => 'required',
                'name' => 'required',
            ]);
            $Data=['name'=>$validatedData['name']];
            $id=($validatedData['id']);
            $item = Item::findOrFail($id);
            $result = $item->update($Data);
            return response()->json(['message' => 'Item is updated successfully']); 
        }

    public function destroy_items(string $id)
    {
        if(!Auth::user() || !Auth::user()->hasPermissionWithName("delete_item"))
            {
                    return view("errors.role_permission_error");
            }
        try 
            {
                Item::destroy($id);
                return response()->json(['message' => 'Item is deleted successfully']);
            } 
        catch (QueryException $e) 
            {
                return response()->json(['errors' => ['name' => ['Error to Delete Item.']]], 422);
            }
         catch (\Exception $e) 
            {
                return response()->json(['errors' => ['name' => ['Error to Delete Item.']]], 422);
            }
    }
}
