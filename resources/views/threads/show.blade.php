@extends('layouts.master')

@section('title', 'Thread')

@section('content')

    <ul>
        <li>Thread Name: {{$thread->name}}</li>
        <li>Thread Content: {{$thread->content}}</li>
    </ul>
@endsection
