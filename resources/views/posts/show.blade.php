<!-- resources/views/posts/show.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $posts->title }}</h1>
        <p>{{ $posts->content }}</p>
        <p>Author: {{ $posts->author }}</p>
        <a href="{{ route('posts.edit', $posts->id) }}" class="btn btn-primary">Edit</a>
    </div>
@endsection
