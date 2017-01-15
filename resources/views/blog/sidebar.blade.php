<hr />
<div class="sidebarMobileFlex">
<div>
  <h4>Blog Archive</h4>
      @foreach ($posts_by_date as $date => $posts)
      <div class="btn-group">
        <button type="button" class="btn btn-info btn-Archive dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          {{$date}}<span class="caret"></span>
        </button>
      <ul class="dropdown-menu">
        @foreach ($posts as $post)
          <li><a class="dropdown-item" href="/post/{{$post->id}}">{{ $post->title }}</a></li>
        @endforeach
      </div>
      @endforeach
      <hr>
</div>

<div>
    <h4>Tags:</h4>
      @foreach($tags as $tag)
        <a href="/tag/{{$tag->id}}/posts/" role="presentation">
          <button class="btn btn-default  btn-sm" type="button">
            {{$tag->name}}   <span class="counterLabel"> ( {{$tag->tagCount}} ) </span>
          </button>
        </a>
      @endforeach
    <hr />
</div>

<div>
<h4> Categories: </h4>
    @foreach($categories as $category)
      <a href="/category/{{$category->id}}/posts/" role="presentation">
        <button class="btn btn-default btn-sm btn" type="button">
          {{$category->name}}   <span class="counterLabel">( {{$category->categoryCount}} )</span>
        </button>
      </a>
    @endforeach
</div>

</div>
