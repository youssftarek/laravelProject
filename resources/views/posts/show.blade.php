@extends('layouts.app')

@section('pageName') Show Page @endsection

@section('content')
<div class="card mt-5">
    <div class="card-header">Post Information</div>
    <div class="card-body">

        <h5 class="card-title">{{$post->title}}</h5>
        <p class="card-text">{{$post->description}}</p>

    </div>
</div>
<div class="card mt-5">
    <div class="card-header">Post Creator Information</div>
    <div class="card-body">

        <h5 class="card-title">{{$post->user->name}}</h5>
        <p class="c ard-text">Created at: {{$post->created_at}}</p>

    </div>
</div>
<div class="text-center mt-3">
    <a href="{{ route('posts.index') }}" class="mt-3 btn btn-success">Return To Index Page</a>
</div>
@endsection
