@extends('layouts.main')

@section('container')

<h2>{{ $post->title }}</h2>

<p>by. <a href="#" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>

{!! $post->body !!}


<a href="/post" class="d-block mt-3">Back To Posts</a>
@endsection