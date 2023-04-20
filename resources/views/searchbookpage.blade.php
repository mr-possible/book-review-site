@extends('layouts.app')

<head>
    <link rel="stylesheet" href="{{ asset('css/searchbookpage.css') }}">
</head>

@section('title', 'Book Review Site - Search')

@section('content')
<h1>Book Search Page</h1>
<div class="container">
  <form action="/search" method="POST" class="search-form">
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
        <h5>Price: ${{ $result->book_price }}</h5>
        <h5>ISBN: {{ $result->book_isbn }}</h5>
        <h5>No of Pages: {{ $result->book_pagecount }}</h5>
        <h5>Language: {{ $result->book_language }}</h5>
      </div>
      @endforeach
      </ul>
    @elseif(isset($message))
      <p>{{ $message }}</p>
    @endif
  </div>
</div>
@endsection