@extends('layouts.app')
@section('pageName') Posts Page @endsection
@section('content')
    <div class="text-center">
        <a href="{{ route('posts.create') }}" class="mt-3 btn btn-success">Create Post</a>
    </div>
    <table class="table table-hover mt-3">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Posted By</th>
            <th scope="col">Created At</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>
                <a href="{{ route('posts.show',['post'=> '1']) }}" class="btn btn-info">View</a>
                <a href="" class="btn btn-primary">Edit</a>
                <a href="" class="btn btn-danger">Delete</a>
            </td>
          </tr>
        </tbody>
      </table>
@endsection
