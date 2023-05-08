@extends('layouts.app')

@section('title', 'Book Review Site')

@section('content')
<div class="container is-fluid">
  <br>
  <h1 class="title is-4 has-text-centered">Welcome <strong>{{ Auth::user()->name }}</strong> ! What would you like to do today ?</h1>
  <div class="columns">
    <div class="column">
      <div class="card">
        <div class="card-image">
          <figure class="image is-4by3">
            <img src="{{ asset('images/dashboard-search-book.jpg') }}" alt="Placeholder image">
          </figure>
        </div>
        <div class="card-content has-text-centered">
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
        <div class="card-content has-text-centered">
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
        <div class="card-content has-text-centered">
          <div class="content">
            Share your thoughts and pen them.
          </div>
        </div>
        <footer class="card-footer has-text-centered">
          <a href="/submitreview" class="title is-4 card-footer-item">Submit</a>
        </footer>
      </div>
    </div>
  </div>
</div>
@endsection