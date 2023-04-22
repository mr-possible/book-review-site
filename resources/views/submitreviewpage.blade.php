@extends('layouts.app')

<head>
    <link rel="stylesheet" href="{{ asset('css/searchbookpage.css') }}">
    <link rel="stylesheet" href="{{ asset('css/submitreviewpage.css') }}">
</head>

@section('title', 'Book Review Site - Submit A Review')

@section('content')
<h1>Submit A Review</h1>
<div class="container">
  <form action="/searchbookForReview" method="POST" class="search-form">
    @csrf
    <input type="text" name="query" placeholder="Search a book">
    <button type="submit">Search</button>
  </form>
  <div class="search-results">
    @if(isset($results) && count($results))
      <ul>
        @foreach($results as $result)
          <div class="book-container">
          <img src="book-thumbnail.jpg" alt="Book Thumbnail">
          <div class="book-info">
            <h2>{{ $result->book_title }}</h2>
            <h5>Author: {{ $result->book_author }}</h5>
            <h4><p>{{ $result->book_description }}</p></h4>
            <h5>Publisher : {{ $result->book_publisher }}</h5>
            <h5>Price: &#163; {{ $result->book_price }}</h5>
            <h5>ISBN: {{ $result->book_isbn }}</h5>
            <h5>No of Pages: {{ $result->book_pagecount }}</h5>
            <h5>Language: {{ $result->book_language }}</h5>
          </div>
        @endforeach
      </ul>
      <div class="user-review-form">
      <h3>Add a review</h3>
        <form action="/store-review" id="user-review-form" method="POST">
          @csrf
          <input type="hidden" name="book_id" value="{{ $result->id }}">
          <!--WILL use AUTH USER LATER  <input type="hidden" name="user_id" value="{{ Auth::id() }}"> -->
          <input type="hidden" name="user_id" value="1">
          <label for="review-title">Review Title:</label>
          <input type="text" id="review-title" name="review-title" required>
          <label for="review-rating">Rating (1-10):</label>
          <input type="number" id="review-rating" name="review-rating" required>
          <label for="review-body">Review Body:</label>
          <textarea id="review-body" name="review-body" required></textarea>
          <button type="submit">Submit Review</button>
        </form>
      </div>
    @elseif(isset($message))
      <p>{{ $message }}</p>
    @endif
  </div>
</div>
@endsection