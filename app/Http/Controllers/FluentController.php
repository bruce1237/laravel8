<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FluentController extends Controller
{
    //
    public function index()
    {
        echo '<h1>Fluent String</h1>';
        $str = 'this is my fluent string test text';
        $newStr = 'This is mY NEW STR';
        echo $this->after($str);
        echo '<hr />';
        echo $this->afterLast($str);
        echo '<hr />';
        echo $this->append($str,$newStr);
    }

    private function after($str)
    {
        return Str::of($str)->after('is');
    }

    private function afterLast($str){
        return Str::of($str)->afterLast('is');
    }

    private function append($str,$newStr)
    {
        return Str::of($str)->append($newStr);
    }

}
