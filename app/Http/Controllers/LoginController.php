<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function index()
    {
        $component = ['abc'];
        return view('login',compact('component'));
    }

    public function login(Request $request)
    {
        $validate = $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:6|max:12',
        ]);
        $request->all();
        $request->post();
        $request->input('email');
        
    }
}
