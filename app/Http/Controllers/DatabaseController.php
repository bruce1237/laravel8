<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use MongoDB\BSON\Timestamp;

class DatabaseController extends Controller
{
    public $component = ['abc'];
    public function addData()
    {
        $data = [
            'name'=>'test2',
            'email'=>random_int(10,90).'test@test.com',
            'email_verified_at'=>date('c'),
            'password'=>'pwd'
        ];
        $res = DB::table('users')->insert($data);
        // return back()->with('key','value');
    }

    public function getAllData()
    {
        $data = DB::table('users')->get();
        $component = $this->component;
        return view('database_user',compact('data','component'));
    }

    public function getDataByID($id)
    {
        $component = $this->component;
        $data = DB::table('users')->where('id',$id)->first();
        return view('singleUser',compact('data','component'));
    }

    public function delPost($name = null)
    {
        $res = DB::table('users')->where('name',$name)->delete();
        dd($res);
    }

    public function updatePost($id)
    {
        $data = [
            'name'=>'test9',
            'email'=>random_int(10,90).'test@test.com',
            'email_verified_at'=>date('c'),
            'password'=>'pwd'
        ];
        $res = DB::table('users')->updateOrInsert(['id'=>$id],$data);
        dd($res);
    }
}
