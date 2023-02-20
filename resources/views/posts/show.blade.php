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

        <h5 class="card-title">{{$post->posted_by}}</h5>
        <p class="card-text">Created at: {{$post->created_at}}</p>

    </div>
</div>
@endsection
