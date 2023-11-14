@extends('layouts.users')

@section('title', 'UserProfiles')

@section('usercontent')
    <p>All Users inside the Forum Page:</p>
    <ul>
        @foreach ($users as $user)
            <li>{{$user->name}}</li>
        @endforeach
    </ul>

@endsection
