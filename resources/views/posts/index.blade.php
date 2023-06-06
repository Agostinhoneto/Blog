<!-- resources/views/profiles/index.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Posts</h1>
        @include('components/flash-message')
        <a href="{{ route('posts.create') }}" class="btn btn-primary mb-3">Create Posts</a>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                 @foreach($posts as $post)
                   <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->content }}</td>
                        <td>
                            <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary">Read More</a>
                            <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this profile?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $posts->links()}}
    </div>
@endsection