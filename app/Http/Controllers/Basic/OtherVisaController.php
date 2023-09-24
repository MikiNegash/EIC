<?php

namespace App\Http\Controllers\Basic;

use App\Http\Controllers\Controller;
use App\Models\Basic\OtherVisa;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class OtherVisaController extends Controller
{
    function view_other_visa(Request $request)
    {
        if(!Auth::user() || !Auth::user()->hasPermissionWithName("view_other_visa"))
        {
            return "";
        }
        $other_visas=OtherVisa::all();
        return view("basic.other_visa",compact("other_visas"));

    }
    function register_other_visa(Request $request)
    {

        if(!Auth::user() || !Auth::user()->hasPermissionWithName("register_other_visa"))
        {
            return "";
        }

        $rules=["type"=>"required|unique:App\Models\Basic\OtherVisa,type|regex:/^[a-zA-Z\s-]+$/"];

        $messages=array(
            "type.required"=>"Enter visa type!!",
            "type.unique"=>"This visa type is already exist!!",
            "type.regex"=>"Other visa type should contains only alphabet characters!!"
        );

        $validator = Validator::make($request->all(), $rules,$messages);

        if ($validator->fails()) {
            $html="<ul>";
            foreach($validator->errors()->all() as $error)
            {
                $html.="<li>".$error.'</li>';
            }
            $html.="</ul>";
            return $html;
        }

        OtherVisa::create(["type"=>$request->type,"added_by"=>Auth::user()->id]);

        return "yes";


    }
    function update_other_visa(Request $request)
    {

        if(!Auth::user() || !Auth::user()->hasPermissionWithName("update_other_visa"))
        {
            return "";
        }



        $visa=OtherVisa::where("id",$request->other_visa_id)->get()->first();

        if(!$visa)
        {
            return "Select valid other visa to update!!";
        }

        $rules=["type"=>"required|unique:App\Models\Basic\OtherVisa,type,".$visa->id."|regex:/^[a-zA-Z0-9\s-]+$/"];

        $messages=array(
            "type.required"=>"Enter visa type!!",
            "type.unique"=>"This visa type is already exist!!",
            "type.regex"=>"Other visa type should contains only alphabet characters!!"
        );

        $validator = Validator::make($request->all(), $rules,$messages);

        if ($validator->fails())
        {
            $html="<ul>";
            foreach($validator->errors()->all() as $error)
            {
                $html.="<li>".$error.'</li>';
            }
            $html.="</ul>";
            return $html;
        }

        $visa->update(["type"=>$request->type,"updated_by"=>Auth::user()->id]);

        return "yes";

    }
    function delete_other_visa(Request $request)
    {
        if(!Auth::user() || !Auth::user()->hasPermissionWithName("delete_other_visa"))
        {
            return "";
        }

        $visa=OtherVisa::where("id",$request->visa_id)->get()->first();

        if(!$visa)
        {
            return "Select valid other visa to delete!!";
        }

        try{
            $visa->delete();
            return "yes";
        }
        catch(Exception $e)
        {

            return "Failed to delete this other visa!!";
        }


    }
}
