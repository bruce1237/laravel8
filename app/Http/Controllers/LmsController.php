<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDO;

class LmsController extends Controller
{
    //
    public function index(){
        return view('index');
    }
    
    public function aboutus(){
        return view('aboutus');
    }
    
    public function contactus(){
        return view('contactus');
    }
}
