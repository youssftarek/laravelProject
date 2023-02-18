@extends('layouts.app')

@section('pageName')Create Post @endsection

@section('content')
<form>
    <div class="form-group mt-5">
      <label for="exampleFormControlInput1">Title</label>
      <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
    </div>
    <div class="form-group">
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Description</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
      <label for="exampleFormControlSelect1">Post Creator</label>
      <select class="form-control" id="exampleFormControlSelect1">
        <option>Ahmed</option>
      </select>
    </div>
    <div class="text-center">
        <button type="button" class="btn btn-success ">Create Post</button>
    </div>
</form>
@endsection

