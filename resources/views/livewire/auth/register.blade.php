@extends('layouts.app')

@section('title', 'Book Review Site - Register')

@section('content')
<div class="container is-fluid">
    @if (Session::has('error'))
        <h3 class="has-text-danger">{{ Session::get('error') }}</h3>
    @endif
    <form action="{{ route('user-register') }}" method="post">
        @csrf
        @method('post')
        <div class="field">
            <label class="label">User Name</label>
            <div class="control">
                <input type="text" name="name" class="input" placeholder="Enter your name" />
            </div>
            @if ($errors->has('name'))
                <p class="help is-danger">{{ $errors->first('name') }}</p>
            @endif
        </div>
        <div class="field">
            <label class="label">User Email Id</label>
            <div class="control">
                <input type="email" name="email" class="input" placeholder="Enter your email" />
            </div>
            @if ($errors->has('email'))
                <p class="help is-danger">{{ $errors->first('email') }}</p>
            @endif
        </div>
        <div class="field">
            <label class="label">Password</label>
            <div class="control">
                <input type="password" name="password" class="input" placeholder="Enter your password" />
            </div>
            @if ($errors->has('password'))
                <p class="help is-danger">{{ $errors->first('password') }}</p>
            @endif
        </div>
        <div class="field">
            <label class="label">Confirm Password</label>
            <div class="control">
                <input type="password" name="password_confirmation" class="input" placeholder="Confirm your password" />
            </div>
        </div>
        <div class="field is-grouped">
            <div class="control">
                <button type="submit" class="button is-link">Register</button>
            </div>
            <div class="control">
                <button type="reset" class="button is-link is-light">Reset</button>
            </div>
        </div>
    </form>
</div>
@endsection