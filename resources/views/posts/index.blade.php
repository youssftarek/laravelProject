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
            @foreach ($postCollectionView as $post)
          <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->title}}</td>
            <td>{{$post->user ? $post->user->name : 'Not found'}}</td>
            <td>{{$post->created_at}}</td>
            <td>
                <a href="{{ route('posts.show',$post->id) }}" class="btn btn-info">View</a>
                <a href="" class="btn btn-primary">Edit</a>
                <form action="{{ url('/posts', $post->id) }}" method="post">
                    <input class="btn btn-danger" type="submit" value="Delete" />
                    @method('delete')
                    @csrf
                </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
@endsection

