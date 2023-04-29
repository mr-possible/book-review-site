@extends('layouts.app')

<head>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>

@section('title', 'Book Review Site - Register')

@section('content')
<div class="user-register-heading">
    <h1>Register Yourself!</h1>
</div>
<div class="user-register-container">
    @if (Session::has('error'))
        <h3 class="text-danger">{{ Session::get('error') }}</h3>
    @endif

    <form action="{{ route('user-register') }}" method="post">
        @csrf
        @method('post')
        <div class="user-form-group">
            <label>User Name: </label>
            <input type="text" name="name" class="user-form-control" placeholder="Enter your name" />
            @if ($errors->has('name'))
                <p class="text-danger">{{ $errors->first('name') }}</p>
            @endif
        </div>
        <div class="user-form-group">
            <label>User Email Id: </label>
            <input type="email" name="email" class="user-form-control" placeholder="Enter your email" />
            @if ($errors->has('email'))
                <p class="text-danger">{{ $errors->first('email') }}</p>
            @endif
        </div>
        <div class="user-form-group">
            <label>Password: </label>
            <input type="password" name="password" class="user-form-control" placeholder="Enter your password" />
            @if ($errors->has('password'))
                <p class="text-danger">{{ $errors->first('password') }}</p>
            @endif
        </div>
        <div class="user-form-group">
            <label>Confirm Password: </label>
            <input type="password" name="password_confirmation" class="user-form-control"
                placeholder="Confirm your password" />
        </div>
        <div class="user-form-submit">
            <button type="submit" class="user-form-submit-button">Register</button>
        </div>
    </form>
</div>
@endsection