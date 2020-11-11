<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HTTPClientController extends Controller
{
    //
    public function getAllPost()
    {
        $url = 'https://jsonplaceholder.typicode.com/posts';
        $response = Http::get($url);
        return $response->json();
    }

    public function getPost($id = null)
    {
        $url = 'https://jsonplaceholder.typicode.com/posts/' . $id;
        $response = Http::get($url);
        return $response->json();
    }
    public function addPost()
    {
        $data = [
            'userId'=>997,
            'id'=>997,
            'title'=>'testB',
            'body'=>'lalaTest'
        ];
        $url = 'https://jsonplaceholder.typicode.com/posts';
        $response = Http::post($url, $data);
        return $response->json();
    }

    public function updatePost($id)
    {
        $data = [
            'userId'=>997,
            'id'=>997,
            'title'=>'testB',
            'body'=>'lalaTest'
        ];
        $url = 'https://jsonplaceholder.typicode.com/posts/'.$id;
        // $response = Http::patch($url, $data);
        $response = Http::put($url, $data);
        return $response->json();
    }

    public function delPost($id)
    {
        $url = 'https://jsonplaceholder.typicode.com/posts/'.$id;
        $response = Http::delete($url);
        return $response->json();
    }
}
