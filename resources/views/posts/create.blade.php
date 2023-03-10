@extends('layouts.app')

@section('pageName')Create Post @endsection

@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ route('posts.store') }}">
    @csrf
    <div class="form-group mt-5">
      <label for="exampleFormControlInput1">Title</label>
      <input name= "title" type="text" class="form-control" id="exampleFormControlInput1">
    </div>
    <div class="form-group">
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Description</label>
          <textarea name= "description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Posted By</label>
        <select name="posted_by" class="form-control">
            @foreach ($users as $user)
            <option value="{{$user->id}}">{{$user->name}}</option>
            @endforeach
        </select>
    </div>
    </div>
    <div class="text-center">
        <button type="submit" class="btn btn-success ">Create</button>
    </div>
</form>

@endsection

