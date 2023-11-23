@extends('layouts.master')

@section('title', 'Current Thread')


@section('content')

<p>All Threads inside the Forum Page:</p>
<ul>
    @foreach ($threads as $thread)
        <li>{{$thread->title}}</li>
        <li>{{$thread->content}}</li>
    @endforeach
</ul>

<a href="{{ route('threads.create')}}">Create Thread</a>

@endsection
