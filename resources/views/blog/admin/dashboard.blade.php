@extends('layouts.app')

@section('content')

<div class="container">
  <h1>Dashboard</h1>
  <div class="dashContainer">

    <div class="newPostCard">
      <h3>Create A New Post</h3>
      <a href="/addpost"><button type="button" name="addPost" class="btn btn-primary">Create New Blog Post</button></a>
    </div>

    <div class="newPostCard">
      <h3>Edit Post</h3>
      @foreach($blogposts as $post)
        <p>
          {{$post->title}} | {{$post->created_at->format('F-d-Y')}} | <a href="/editpost/{{$post->id}}">Edit</a> | <a href="/delete/{{$post}}">Delete</a>
        </p>
      @endforeach
    </div>




  </div>
</div>

@endsection
