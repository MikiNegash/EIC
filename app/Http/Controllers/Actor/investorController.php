<?php

namespace App\Http\Controllers\Actor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\customer;
use DataTables;

class investorController extends Controller
{

    public function investors_dashboard(){
        return view('investors.investors_dashboard');
    }
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = customer::latest()->get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){

                           $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';

                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }

        return view('investors');
    }

}
