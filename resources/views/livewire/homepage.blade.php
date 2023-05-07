@extends('layouts.app')

@section('title', 'Book Review Site')

@section('content')
<h1 class="title is-1 has-text-centered">Welcome <strong>{{ Auth::user()->name }}</strong> !</h1>
<div class="dashboard-main-container columns is-multiline">
  <div class="dashboard-main-card column is-one-third">
    <div class="card">
      <header class="card-header has-text-centered">
        <h5 class="card-header-title is-size-2">Search a Book</h5>
      </header>
      <div class="card-content">
        <div class="content">
          Find and search for books in our extensive library collection.
        </div>
      </div>
      <footer class="card-footer has-text-centered">
        <a href="/searchbook" class="card-footer-item">Search</a>
      </footer>
    </div>
  </div>
  <div class="dashboard-main-card column is-one-third">
    <div class="card">
      <header class="card-header has-text-centered">
        <h5 class="card-header-title is-size-2">Read a Review</h5>
      </header>
      <div class="card-content">
        <div class="content">
          Read reviews of popular books and discover new titles.
        </div>
      </div>
      <footer class="card-footer">
        <a href="/readreview" class="card-footer-item">Read</a>
      </footer>
    </div>
  </div>
  <div class="dashboard-main-card column is-one-third">
    <div class="card">
      <header class="card-header">
        <h5 class="card-header-title is-size-2">Submit a Review</h5>
      </header>
      <div class="card-content">
        <div class="content">
          Share your thoughts and contribute to our community of book lovers.
        </div>
      </div>
      <footer class="card-footer">
        <a href="/submitreview" class="card-footer-item">Submit</a>
      </footer>
    </div>
  </div>
</div>
@endsection