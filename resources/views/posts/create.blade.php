@extends('layouts.master')

@section('title', 'Create a Post')

@section('content')

<form method="POST" action="{{ route('posts.store')}}">

@csrf

<p>Post Title: <input type="text" name="post_title" value="{{ old('post_title')}}"></p>
<p>Post Content: <input type="text" name="post_content" value="{{ old('post_content')}}"></p>
<p>Thread ID: <input type="text" name="thread_id" value="{{ old('thread_id')}}"></p>
<p>User ID: <input type="text" name="user_id" value="{{ old('user_id')}}"></p>


<input type="submit" value="Submit">

<a href="{{ route('posts.index')}}">Cancel Post</a>



</form>

@endsection
