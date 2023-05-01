@extends('layouts.app')

@section('title', 'Book Review Site - My Profile')

@section('content')
<div class="columns">
  <div class="column is-half is-offset-one-quarter">
    <div class="box">
      <div class="columns is-vcentered">
        <div class="column is-one-fifth">
          <figure class="image is-128x128">
            <!-- Add 'upload image' feature later -->
            <img src="#" alt="{{ Auth::user()->name }}">
          </figure>
        </div>
        <div class="column">
          <h1 class="title is-4">{{ Auth::user()->name }}</h1>
          <h2 class="subtitle is-6">{{ Auth::user()->email }}</h2>
        </div>
        <div class="column is-narrow">
          <!-- Add 'profile edit' feature later -->
          <a href="#" class="button is-warning">Edit My Profile</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection