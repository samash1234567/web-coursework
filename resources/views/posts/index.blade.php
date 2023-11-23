@extends('layouts.master')

@section('title', 'Current Post')


@section('content')

<p>All Posts inside the Thread Pages:</p>
    <ul>
        @foreach ($posts as $post)
specify IDs or classes for CSS!
            <li><a href="{{ route('posts.show', ['id' => $post->id])}}">{{$post->post_title}}</a></li>
        @endforeach
    </ul>

    <a href="{{ route('posts.create')}}">Create Post</a>





@endsection
