<?php

namespace App\Http\Controllers\Investment;
use App\Http\Controllers\Controller;
use App\Models\Investment\MouTemplateTags;
use Illuminate\Http\Request;
use PDF;

class PDFController extends Controller
{
    //listtemplateTags
    public function index()
    {
        $data = [
            'title' => 'MOU Template',
            'date' => date('m/d/Y')
        ];
           
        $pdf = PDF::loadView('investment.testPdf', $data);
     
        return $pdf->stream('test.pdf');
    }

    public function listtemplateTags() 
    {
        $tags = new MouTemplateTags();
        $allTags = MouTemplateTags::all('title','tag');
        return view('Investment.templateView',compact('tags','allTags'));
    }
}
