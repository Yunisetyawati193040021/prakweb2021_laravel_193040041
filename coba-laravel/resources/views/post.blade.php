@extends('layouts.main')

@section('container')

<h2>{{ $post->title }}</h2>

<p>by. Muhammad Viqri Febriana in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>

{!! $post->body !!}


<a href="/post">Back To Posts</a>
@endsection