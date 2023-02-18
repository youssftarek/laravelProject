<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Redirect;

class PostController extends Controller
{
    public function index(){
        return view('posts.index');
    }
    public function show(){
        return view('posts.show');
    }
    public function create(){
        return view('posts.create');
    }
    public function store(){
        $requestData = request();
        Post::create([
            'title'=> $requestData['title'],
            'description' => $requestData['description'],
        ]);
        return redirect()->route('posts.index');
    }
}
