@extends('layouts.blog')
@section('blogContent')
  <h1> {{$blogpost->title}}</h1>
  <img src="{{$blogpost->imageURL}}" alt="Featured Image" class="postFeaturedImage">
  <div class="blogpostBody">
    {!! html_entity_decode($blogpost->body) !!}
  </div>
  <hr>
  <div class=container>
      <h3> Comment Below: </h3>

      <form method="post" action="/post/{{$blogpost->id}}/comment">
        <div class="form-group row">
          <label for="user_name">Name:</label>
          <input class="form-control" name="user_name" />
        </div>

        <div class="form-group row">
          <label for="body">Comment:</label>
          <textarea name="body" class="form-control"> </textarea>
        </div>

        <div class="form-group row flex-items-xs-right">
          <button type="submit" class="btn btn-info ">Add Comment</button>
        </div>

        <input type="hidden" name="_token" value="{{ csrf_token() }}">

      </form>
    </div>

  <hr>
  <h3>Comments</h3>
  <div class="commentContainer">
    <ul>
      @foreach ($blogpost->comments as $comment)
        <li class="comment">
          <p><b>{{$comment->user_name}}: </b>
          {{$comment->body}}
          </p>
        </li>
      @endforeach
    </ul>
  </div>
@stop


@section('sidebar')
  @include('blog.sidebar')
@stop
