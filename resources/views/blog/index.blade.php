@extends('layouts.blog')
@section('blogContent')
  <h1> Blog Posts
    @if(isset($tagName))
        <span class='filteredBy'>= Filtered By: #{{$tagName}}</span>
    @endif
    @if(isset($categoryName))
        <span class='filteredBy'>- Filtered By: {{$categoryName}}</span>
    @endif
  </h1>

  @foreach($posts as $post)
      <div>
      <img src="{{$post->imageURL}}" alt="Featured Image" class="postFeaturedImage">
      <h1> {{$post->title}}</h1>
      <p>
        {{$post->created_at->format('F d Y')}} -
        @foreach($post->tags as $tag)
              <a href="#">#{!! $tag->name !!}</a>
        @endforeach
      </p>

      <p>
        {{str_limit($post->body, 80)}}
        <a href="/post/{{$post->id}}">Read More ...</a>
      </p>

      @foreach($post->categories as $category)
            <a href="#">{!! $category->name !!}</a>
      @endforeach

      </div>
      <hr>
  @endforeach

@stop


@section('sidebar')
  <p>
  Tags:

      @foreach($tags as $tag)
        <a href="#" role="presentation">
          <button class="btn btn-default" type="button">
            #{{$tag->name}}    <span class="badge">  {{$tag->tagCount}}</span>
          </button>
        </a>
      @endforeach
   </p>

<hr />

<p>
  Categories:
  @foreach($categories as $category)
    <a href="#" role="presentation">
      <button class="btn btn-default" type="button">
        #{{$category->name}}    <span class="badge">  {{$category->categoryCount}}</span>
      </button>
    </a>
  @endforeach
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
