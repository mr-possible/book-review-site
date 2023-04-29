@extends('layouts.app')

<head>
    <link rel="stylesheet" href="{{ asset('css/user-profile.css') }}">
</head>

@section('title', 'Book Review Site - My Profile')

@section('content')
<div class="user-profile-container">
    <h3>Name: {{ Auth::user()->name }}</h3>
    <h3>Email: {{ Auth::user()->email }}</h3>
</div>
@endsection