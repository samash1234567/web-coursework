@extends('layouts.master')

@section('title', 'Current Category')


@section('content')

<p>All Categories inside the Forum Page:</p>
<ul>
    @foreach ($categories as $category)
        <li>{{$category->name}}</li>
        <li>{{$category->catdescription}}</li>
    @endforeach
</ul>

<a href="{{ route('categories.create')}}">Create Category</a>

@endsection
