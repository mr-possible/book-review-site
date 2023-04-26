@extends('layouts.app')

<head>
    <link rel="stylesheet" href="{{ asset('css/searchbookpage.css') }}">
    <link rel="stylesheet" href="{{ asset('css/book.css') }}">
    <link rel="stylesheet" href="{{ asset('css/review.css') }}">
    <link rel="stylesheet" href="{{ asset('css/search-book.css') }}">
    <livewire:scripts />
</head>

@section('title', 'Book Review Site - Read Review')

@section('content')
<h1>Read A Review</h1>
<div class="container">
  <form action="/readreview" method="POST" class="search-form">
    @livewire('search-book')
  </form>
  <div class="search-results">
    @if(isset($results) && count($results))
      <ul>
        @foreach($results as $result)
          <div class="book-info">
            @livewire('book-card', ['result' => $result])
            @livewire('book-detail-info', ['result' => $result])
          </div>
          @if(count($result->reviews))
            <hr>
            <h1><strong>Reviews</strong></h1>
            <div class="comments-container">
              <ul id="comments-list" class="comments-list">
                @foreach($result->reviews as $review)
                    <li>
                      @livewire('book-review-comment', ['review' => $review])
                    </li>
                @endforeach
              </ul>
            </div>
          @else
            <h1><strong>No Reviews Yet!</strong></h1>
          @endif
        @endforeach
      </ul>
    @elseif(isset($message))
      <p>{{ $message }}</p>
    @endif
  </div>
</div>
@endsection