@extends('layouts.app')

@section('pageName')Create Post @endsection

@section('content')
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
      <label for="exampleFormControlSelect1">Post Creator</label>
      <select name= "post_creator" class="form-control" id="exampleFormControlSelect1">
        <option value="1">Ahmed</option>
      </select>
    </div>
    <div class="text-center">
        <button type="submit" class="btn btn-success ">Create</button>
    </div>
</form>
@endsection

