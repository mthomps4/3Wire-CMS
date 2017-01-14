@extends('layouts.blog')
@section('blogContent')
  <h1 class="pageTitle"> Blog Posts
    @if(isset($tagName))
        <span class='filteredBy'>- Filtered By: #{{$tagName}}</span>
    @endif
    @if(isset($categoryName))
        <span class='filteredBy'>- Filtered By: {{$categoryName}}</span>
    @endif
  </h1>
  <hr>

  @foreach($posts as $post)
      <div>
      <img src="{{$post->imageURL}}" alt="Featured Image" class="postFeaturedImage">
      <h1> {{$post->title}}</h1>
      <p>
        {{$post->created_at->format('F d Y')}} -
        @foreach($post->tags as $tag)
              <a href="/tag/{{$tag->id}}/posts/">{!! $tag->name !!}</a>
        @endforeach
      </p>

      <p>
        {{str_limit($post->body, 80)}}
        <a href="/post/{{$post->id}}">Read More ...</a>
      </p>

      @foreach($post->categories as $category)
            <a href="/category/{{$category->id}}/posts/">{!! $category->name !!}</a>
      @endforeach

      </div>
      <hr>
  @endforeach
@stop

@section('sidebar')
  @include('blog.sidebar')
@stop
