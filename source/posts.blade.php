@extends('_layouts.master')

@section('body')
<h1>Posts</h1>
<ul>
  @foreach ($posts as $post)
    <li><a href="{{ $post->getUrl() }}">{{ $post->title }}</a> by {{ $post->author }}</li>
  @endforeach
</ul>
@endsection
