@extends('layouts.app')

@section('title', 'Book Review Site - Login')

@section('content')
<div class="container is-fluid">
    @if (Session::has('error'))
        <p class="help is-danger">{{ Session::get('error') }}</p>
    @endif
    @if (Session::has('success'))
        <p class="help is-success">{{ Session::get('success') }}</p>
    @endif
    <form action="{{ route('user-login') }}" method="post">
        @csrf
        @method('post')
        <div class="field">
            <label class="label">Email</label>
            <div class="control">
                <input type="email" name="email" class="input" placeholder="Enter your Email" />
            </div>
            @if ($errors->has('email'))
                <p class="help is-danger">{{ $errors->first('email') }}</p>
            @endif
        </div>
        <div class="field">
            <label class="label">Password</label>
            <div class="control">
                <input type="password" name="password" class="input" placeholder="Enter your Password" />
            </div>
            @if ($errors->has('password'))
                <p class="help is-danger">{{ $errors->first('password') }}</p>
            @endif
        </div>
        <div class="field">
            <div class="control">
                <button type="submit" class="button is-primary">Login</button>
            </div>
        </div>
    </form>
</div>
@endsection