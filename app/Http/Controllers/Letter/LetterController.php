<?php

namespace App\Http\Controllers\Letter;

use App\Http\Controllers\Controller;
use App\Models\Actor\Stakeholder;
use App\Models\Actor\User;
use App\Models\Letter\LetterCode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDF;
use DataTables;

class LetterController extends Controller
{

    public function create_new_letter_template()
    {
        if(!Auth::user() || !Auth::user()->hasPermissionWithName("view_letter_code"))
        {
            return "";
        }
        $body_parts=[];

        $formdata = request()->all();
        $body_part_counter=0;
        foreach ($formdata as $key => $value) {
            if(str_starts_with($key, 'body_part_'))
                {
                    $id=explode("_",$key)[2];
                    if($request->$key=="paragraph")
                    {
                        $p_key="paragraph_".$id;
                        if($request->$p_key!="")
                        {
                            $body_part=["type"=>"paragraph","paragraph"=>$request->$p_key];
                            $body_parts[$body_part_counter]=$body_part;
                            $body_part_counter++;
                        }

                    }
                    else
                    {
                        $t_r_index="table_row_size_".$id;
                        $table_row_size=$request->$t_r_index;
                        $t_c_index="table_column_size_".$id;
                        $table_column_size=$request->$t_c_index;
                        $body_part=["type"=>"table","table_row"=>$table_row_size,"table_column"=>$table_column_size];
                        for($i=0;$i<$table_row_size;$i++)
                        {
                            for($j=0;$j<$table_column_size;$j++)
                            {
                                $cell_index="input_".$id."_".$i."_".$j;
                                $body_part[$i."_".$j]=$request->$cell_index;
                            }
                        }
                        $body_parts[$body_part_counter]=$body_part;
                        $body_part_counter++;
                    }


                }

        }
	    $data = [
                'subject' => $request->subject,
                'body_parts'=>$body_parts,
                'body_counter'=>$body_part_counter,
                'closure'=>$request->closure
	    ];



    }
    public function view_new_template_preview(Request $request)
    {
        if(!Auth::user() || !Auth::user()->hasPermissionWithName("view_letter_code"))
        {
            return "";
        }

        $html=$request->content;
        $html=str_replace("</figure>","",$html);
        $html=str_replace('<figure class="table">',"",$html);
        $html=str_replace('<table>',"<table style='width:100%;border-collapse:collapse' border='1'>",$html);

	    $data = [
	            'title' => 'Template letter preview',
	            'date' => date('d/m/Y'),
                'ref' => "EIC/299/3",
                'subject' => ucfirst($request->subject),
                'content' => $html,
                'closure' => ucfirst($request->closure)
	    ];


	    $pdf = PDF::loadView('letter.letter_preview',$data);
        return base64_encode($pdf->output());
	    //return $pdf->download('users_pdf_example.pdf');
    }
    public function create_letter_template()
    {

    }

    public function view_letter_code()
    {
        if(!Auth::user() || !Auth::user()->hasPermissionWithName("view_letter_code"))
        {
            return "";
        }
        $stakeholders=Stakeholder::all()->map->only(['id', 'name', 'email']);
        return view("letter.letter_codes",["stakeholders"=>$stakeholders]);
    }
    function load_letter_types()
    {
        if(!Auth::user() || !Auth::user()->hasPermissionWithName("view_letter_code"))
        {
            return "";
        }

        $data = LetterCode::latest()->orderBy("code","ASC")->get();

        return DataTables::of($data)
            ->addIndexColumn()

            ->addColumn('templates', function($row){
                return $row->Templates->count();
             })
             ->addColumn('description', function($row){
                return "<span id='letter_code_".$row->id."'>".$row->description."</span>";
             })
            ->addColumn('add_template', function($row){
                if(!Auth::user()->hasPermissionWithName("create_new_letter_template"))
                {
                    return '';
                }
                return "<button class='btn btn-sm btn-primary' onclick='add_letter_code_template(\"".$row->code."\",".$row->id.")'>Add Template</button>";
             })
            ->rawColumns(['description','add_template'])
            ->make(true);
    }
}
