@extends('layouts.app')

<head>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>

@section('title', 'Book Review Site - Register')

@section('content')
<div class="user-login-heading">
    <h1>User Login</h1>
</div>

<div class="user-login-container">
    @if (Session::has('error'))
        <p class="text-danger">{{ Session::get('error') }}</p>
    @endif
    @if (Session::has('success'))
        <p class="text-success">{{ Session::get('success') }}</p>
    @endif

    <form action="{{ route('user-login') }}" method="post">
        @csrf
        @method('post')
        <div class="user-login-form-group">
            <label>Email</label>
            <input type="email" name="email" class="user-login-form-control" placeholder="Enter your Email" />
            @if ($errors->has('email'))
                <p class="text-danger">{{ $errors->first('email') }}</p>
            @endif
        </div>
        <div class="user-login-form-group">
            <label>Password</label>
            <input type="password" name="password" class="user-login-form-control" placeholder="Enter your Password" />
            @if ($errors->has('password'))
                <p class="text-danger">{{ $errors->first('password') }}</p>
            @endif
        </div>
        <div class="user-login-form-submit">
            <button type="submit" class="user-login-form-submit-button">Login</button>
        </div>
    </form>
</div>
@endsection