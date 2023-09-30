<?php

namespace App\Http\Controllers\Investment;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Actor\User;
use Illuminate\Http\Request;
use App\Models\Investment\MouTemplateTags;
use DataTables;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Yajra\DataTables\Facades\DataTables as FacadesDataTables;

use function Psy\debug;

class MouTemplateTagsRegistration extends Controller
{
    public function displayMoutemplatePage()
    {
        /*  if(!Auth::user() || !Auth::user()->hasPermissionWithName("investmentcommissionsreg"))
        {
            return view("errors.role_permission_error");
        } */

        $templateTags = new MouTemplateTags();
        $data = $templateTags->MouTemplateTagsNameandId();
        $coms = $data;

        return view("Investment.moutemplateTags", compact('coms'));
    }


    public function update_MoutemplateTag(Request $request)
    {
        /*   if(!Auth::user() || !Auth::user()->hasPermissionWithName("edit_item"))
            {
                    return view("errors.role_permission_error");
            } */
        $moutemplateTag = new MouTemplateTags();
        $moutemplateTag->id = $request->edit_id;
        $moutemplateTag->title = $request->edit_title;
        $moutemplateTag->tag = $request->edit_tag;
        $moutemplateTag->added_by = Auth::user()->id;
        $moutemplateTag->type = $request->edit_type;
        $moutemplateTag->updated_by == Auth::user()->id;
        $invUpdate = MouTemplateTags::find($moutemplateTag->id);
        /*  $invUpdate->update($investmentCommision->all()); */

        $invUpdate->update([
            'title' =>  $moutemplateTag->title,
            'tag' => $moutemplateTag->tag,
            'updated_by' => Auth::user()->id,
            'type' => $moutemplateTag->type,
            'added_by' => 1

        ]);
        return Redirect::to('investment/moutemplate')->with('succ', 'Mou Template updated successfully.');

        /*  redirect()->route('investment/moutemplate')
            ->with('succ', 'Mou Template updated successfully.'); */
    }


    function submitMoutemplateTag(Request $request)
    {
        /* if(!Auth::user() || !Auth::user()->hasPermissionWithName("register_other_visa"))
        {
            return "";
        } */
        MouTemplateTags::create([
            'title' => $request->title,
            'tag' => $request->tag,
            'type' => $request->type,
            'added_by' => 1
        ]);

        return Redirect::to('investment/moutemplate')->with('saved', 'Mou Template Saved successfully.');
/*         response()->json(['message' => 'Template tag registered successfully']);
 */    }
    function deleteMoutemplatetag($id)
    {   
        $templateTag = MouTemplateTags::find($id);
        if ($templateTag) {
            $templateTag->delete();
            return response()->json(['success' => true]);
        }
    
    }
    function load_moutemplateTag()
    {
        /*  if(!Auth::user() || !Auth::user()->hasPermissionWithName("view_users"))
        {
            return "";
        } */


        $templateTag = new MouTemplateTags();
        $data = $templateTag->MouTemplateTagsNameandId();

        //$data = InvestmentCommission::latest()->where('user_type','user')->orderBy("name","ASC")->get();

        return FacadesDataTables::of($data)
            ->addIndexColumn()

            ->addColumn('title', function ($row) {


                return $row->title;
            })
            ->addColumn('tag', function ($row) {
                return $row->tag;
            })
            ->addColumn('type', function ($row) {
                return $row->type;
            })
            ->addColumn('added_by', function ($row) {
                $users = DB::table('users')->select('name')->where('id', $row->added_by)->get();
                
                return $users[0]->name;
            })
            ->addColumn('updated_by', function ($row) {
                return $row->updated_by;
            })



            ->rawColumns(['title', 'tag', 'type', 'added_by', 'updated_by'])

            ->make(true);
    }
}
