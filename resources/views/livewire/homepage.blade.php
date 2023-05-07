@extends('layouts.app')

@section('title', 'Book Review Site')

@section('content')
<h1 class="title is-4 has-text-centered">Welcome <strong>{{ Auth::user()->name }}</strong> !</h1>
<div class="columns">
  <div class="column">
    <div class="card">
      <div class="card-image">
        <figure class="image is-4by3">
          <img src="{{ asset('images/dashboard-search-book.jpg') }}" alt="Placeholder image">
        </figure>
      </div>
      <div class="card-content">
        <div class="content">
          Find and search for books in our extensive library collection.
        </div>
      </div>
      <footer class="card-footer">
        <a href="/searchbook" class="title is-4 card-footer-item">Search</a>
      </footer>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <div class="card-image">
        <figure class="image is-4by3">
          <img src="{{ asset('images/dashboard-read-review.jpg') }}" alt="Placeholder image">
        </figure>
      </div>
      <div class="card-content">
        <div class="content">
          Read reviews of popular books and discover new titles.
        </div>
      </div>
      <footer class="card-footer has-text-centered">
        <a href="/readreview" class="title is-4 card-footer-item">Read</a>
      </footer>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <div class="card-image">
        <figure class="image is-4by3">
          <img src="{{ asset('images/dashboard-submit-review.jpg') }}" alt="Placeholder image">
        </figure>
      </div>
      <div class="card-content">
        <div class="content">
          Share your thoughts and contribute to community of book lovers.
        </div>
      </div>
      <footer class="card-footer has-text-centered">
        <a href="/submitreview" class="title is-4 card-footer-item">Submit</a>
      </footer>
    </div>
  </div>
</div>
@endsection