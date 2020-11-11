<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index()
    {
        $component = [
            'testA',
            'testB',
            'testC',
            'testD'
        ];


        $name = 'john';
        $users = [
            'name'=>'John',
            'email'=>'john@mail.com',
            'gender'=>'Male'
        ];
        return view('user', compact('name','users','component'));
    }
}
