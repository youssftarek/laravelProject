<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
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
        $users = User::all() ;
        return view('posts.create', ['users' => $users]);
    }


    public function store(Request $requestObj){
        $requestData = $requestObj->all();
        Post::create([
            'title'=> $requestObj->title,
            'description' => $requestObj->description,
            'user_id'=> $requestObj->posted_by,
        ]);
        return redirect()->route('posts.index');
    }


    public function destroy($id){
        $post = Post::findOrFail($id);
        $post ->delete();
        return back();
    }


    public function edit($id){
        $post = Post::findOrFail($id);
        return view('posts.edit', compact('post'));
    }


    public function update(){

    }
}
