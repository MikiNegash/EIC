<?php

namespace App\Http\Controllers\PublicPage;

use App\Http\Controllers\Controller;

class publicPageController extends Controller
{
    public function index(){
        return view('publicPage.index');
    }
    public function about(){
        return view('publicPage.about');
    }
    public function faq(){
        return view('publicPage.faq');
    }
    public function contact(){
        return view('publicPage.contact');
    }

    public function index2(){
        return view('publicPage.index2');
    }
    
    public function index3(){
        return view('publicPage.index3');
    }

    public function services(){
        return view('publicPage.services');
    }




}
