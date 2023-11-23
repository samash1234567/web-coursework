@extends('layouts.master')

@section('title', 'Post')

@section('content')

    <ul>
        <li>Post Title: {{$post->post_title}}</li>
        <li>Post Content: {{$post->post_content}}</li>
        <li>Thread Content: {{$post->thread->content}}</li>
    </ul>
@endsection
