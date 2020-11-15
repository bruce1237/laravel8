<?php

namespace App\Http\Controllers;

use App\Models\MyPosts;
use Illuminate\Http\Request;

class PaginationController extends Controller
{
    //
    public function index()
    {
        $posts = $this->getAllPosts();
        return view('myPosts', compact('posts'));
    }
    
    private function getAllPosts()
    {
        return MyPosts::paginate(10);
    }
}
