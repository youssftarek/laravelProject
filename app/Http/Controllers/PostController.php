<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Redirect;
use Termwind\Components\Dd;

class PostController extends Controller
{
    public function index(){
        $postCollection = Post::all();
        return view('posts.index', ['postCollectionView'=>$postCollection]);
    }
    public function show($id){
        $post = Post::findOrFail($id);
        return view('posts.show', compact('post'));
    }
    public function create(){
        return view('posts.create');
    }
    public function store(){
        $requestData = request();
        Post::create([
            'title'=> $requestData['title'],
            'description' => $requestData['description'],
            'posted_by' => $requestData['posted_by'],
        ]);
        return redirect()->route('posts.index');
    }
}
