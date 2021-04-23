<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
//use App\Models\StaticPages;
//use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    public function home(){
        return view('static_page/home');
    }
    public function helpp(){
        return view('static_page/helpp');
    }
    public function about(){
        return view('static_page/about');
    }
}
