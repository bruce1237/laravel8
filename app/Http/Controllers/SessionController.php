<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    //
    public function getSessionData(Request $request)
    {
        
        if ($request->session()->has('name')) {
            echo $request->session()->get('name');
        } else {
            echo "session['name'] no exist";
        }
    }

    public function storeSeesionData(Request $request)
    {
        $request->session()->put('name','boSUn');
        echo "session[' name'] has been set";
    }

    public function delSessionData(Request $request)
    {
        $request->session()->forget('name');
        echo "unset session['name']";
    }
}
