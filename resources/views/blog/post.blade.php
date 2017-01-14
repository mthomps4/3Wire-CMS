@extends('layouts.blog')
@section('blogContent')
  <h1> {{$blogpost->title}}</h1>
  <img src="{{$blogpost->imageURL}}" alt="Featured Image" class="postFeaturedImage">
  <div class="blogpostBody">
    {{$blogpost->body}}
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
  <p>
  Tags:
    <?php
      foreach($tags as $tag)
      {
        echo "<a href='/tag/$tag->id/posts/'>";
        echo "#";
        echo $tag->name;
        echo "</a>";
        echo "  ";
      }
     ?>
   </p>

<hr />

<p>
  Categories:
    <?php
      foreach($categories as $category)
      {
        echo "<a href='/category/$category->id/posts/'>";
        echo "#";
        echo $category->name;
        echo "</a>";
        echo "  ";
      }
     ?>
</p>
<hr />


    <h4>Blog Archive</h4>
@foreach ($posts_by_date as $date => $posts)
<div class="btn-group">
    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      {{$date}}<span class="caret"></span>
    </button>
  <ul class="dropdown-menu">
    @foreach ($posts as $post)
      <li><a class="dropdown-item" href="/post/{{$post->id}}">{{ $post->title }}</a></li>
    @endforeach
  </div>
@endforeach


@stop
