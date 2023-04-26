@extends('layouts.app')

<head>
    <link rel="stylesheet" href="{{ asset('css/searchbookpage.css') }}">
    <link rel="stylesheet" href="{{ asset('css/submitreviewpage.css') }}">
    <link rel="stylesheet" href="{{ asset('css/book.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/search-book.css') }}">
</head>

@section('title', 'Book Review Site - Submit A Review')

@section('content')
<h1>Submit A Review</h1>
<div class="container">
  <form action="/searchbookForReview" method="POST" class="search-form">
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
        @endforeach
      </ul>
      <h1><strong>Add a review</strong></h1>
      <div class="user-review-form">
        <form action="/store-review" id="user-review-form" method="POST">
          @livewire('add-review', ['result' => $result])
          <button type="submit">Submit Review</button>
        </form>
      </div>
    @elseif(isset($message))
      <p>{{ $message }}</p>
    @endif
  </div>
</div>
@endsection










