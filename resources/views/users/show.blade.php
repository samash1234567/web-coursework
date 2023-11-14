@extends('layouts.users')

@section('title', 'User Profile')

@section('usercontent')

    <ul>
        <li>Username: {{$user->name}}</li>
        <li>Email: {{$user->email}}</li>
        <li>Password: {{$user->password}}</li>
        <li>Date of Birth: {{$user->date_of_birth ?? 'Unknown'}}</li>
    </ul>
@endsection
