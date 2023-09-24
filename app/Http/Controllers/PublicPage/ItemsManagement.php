<?php

namespace App\Http\Controllers\Basic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ItemsManagement extends Controller
{
   
    public function items()
    {
        if(!Auth::user() || !Auth::user()->hasPermissionWithName("item"))
            {
                    return view("errors.role_permission_error");
            }
    }
    public function create_items()
    {
        if(!Auth::user() || !Auth::user()->hasPermissionWithName("create_item"))
            {
                    return view("errors.role_permission_error");
            }
    }

   
    public function store_items(Request $request)
    {
        if(!Auth::user() || !Auth::user()->hasPermissionWithName("store_item"))
            {
                    return view("errors.role_permission_error");
            }
    }

    
    public function show(string $id)
    {
        if(!Auth::user() || !Auth::user()->hasPermissionWithName("register_region"))
            {
                    return view("errors.role_permission_error");
            }
    }

    
    public function edit_items(string $id)
    {
        if(!Auth::user() || !Auth::user()->hasPermissionWithName("edit_item"))
            {
                    return view("errors.role_permission_error");
            }
    }

    
    public function update_items(Request $request, string $id)
    {
        if(!Auth::user() || !Auth::user()->hasPermissionWithName("update_item"))
            {
                    return view("errors.role_permission_error");
            }
    }

    
    public function destroy_items(string $id)
    {
        if(!Auth::user() || !Auth::user()->hasPermissionWithName("destroy_item"))
            {
                    return view("errors.role_permission_error");
            }
    }
}
