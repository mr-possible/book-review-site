@extends('layouts.app')

<head>
    <link rel="stylesheet" href="{{ asset('css/searchbookpage.css') }}">
</head>

@section('title', 'Book Review Site - Read Review')

@section('content')
<h1>Read A Review</h1>
<div class="container">
  <form action="/readreview" method="POST" class="search-form">
    @csrf
    <input type="text" name="query" placeholder="Search a book to read it's review">
    <button type="submit">Search</button>
  </form>
  <div class="search-results">
    <!-- Fugit saepe et et. -->
    @if(isset($results) && count($results))
      <ul>
        @foreach($results as $result)
          <div class="book-container">
            <img src="book-thumbnail.jpg" alt="Book Thumbnail">
            <div class="book-info">
            @if(count($result->reviews))
              @foreach($result->reviews as $review)
                <p>{{ $review->book_review_title }}</p>
                <p>{{ $review->book_review_body }}</p>
                <p>Posted On: {{ $review->book_review_date }}</p>
                <p>Upvotes: {{ $review->book_review_upvotes }}</p>
                <p>Downvotes: {{ $review->book_review_downvotes }}</p>
                <p>Posted By: {{ $review->user->name }}</p>
              @endforeach
            @else
              <h4>No reviews yet</h4>
            @endif
          </div>
        @endforeach
      </ul>
    @elseif(isset($message))
      <p>{{ $message }}</p>
    @endif
  </div>
</div>
@endsection