@extends('layouts.index')

@section('title', 'Current Post')


@section('content')

<p class="display-posts">All Posts inside the Thread Pages:</p>
    <ul class="flexbox-container">
        @foreach ($posts as $post)
            <li><a href="{{ route('posts.show', ['id' => $post->id])}}">{{$post->post_title}}</a></li>
        @endforeach
    </ul>

    <a href="{{ route('posts.create')}}">Create a Post</a>





@endsection
