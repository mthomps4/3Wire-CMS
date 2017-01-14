<!-- @foreach($postsByDate as $post)
  <p><b>{{$post->title}}</b>
  {{$post->created_at->format('F-d-Y')}}</p>
@endforeach -->

@foreach ($posts_by_date as $date => $posts)
<div class="btn-group">
  <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    {{ $date }}
  </button>
  <div class="dropdown-menu">
    @foreach ($posts as $post)
      <a class="dropdown-item" href="/post/{{$post->id}}">{{ $post->title }}</a>
    @endforeach
  </div>
  </div>
@endforeach


{{-- @foreach($postsByDate as $post)
  <p><b>{{$post->title}}</b>
  {{$post->created_at->format('F-d-Y')}}</p>
@endforeach

@foreach ($posts_by_date as $date => $posts)
    <h4>{{ $date }}</h4>
    @foreach ($posts as $post)
        <p>{{ $post->title }}</p>
    @endforeach
@endforeach

<!-- @foreach($postsByDate as $post)
<p><b>{{$post->title}}</b>
{{$post->created_at->format('F-d-Y')}}</p>
@endforeach --> --}}
