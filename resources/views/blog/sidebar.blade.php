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
<hr>

<h4>Tags:</h4>
  @foreach($tags as $tag)
    <a href="/tag/{{$tag->id}}/posts/" role="presentation">
      <button class="btn btn-default  btn-sm" type="button">
        {{$tag->name}}    <span class="badge">  {{$tag->tagCount}}</span>
      </button>
    </a>
  @endforeach
<hr />

<h4> Categories: </h4>
  @foreach($categories as $category)
    <a href="/category/{{$category->id}}/posts/" role="presentation">
      <button class="btn btn-default btn-sm btn" type="button">
        {{$category->name}}    <span class="badge">  {{$category->categoryCount}}</span>
      </button>
    </a>
  @endforeach
