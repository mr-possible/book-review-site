@extends('layouts.app')

<head>
    <link rel="stylesheet" href="{{ asset('css/searchbookpage.css') }}">
    <link rel="stylesheet" href="{{ asset('css/book.css') }}">
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
          <div class="book-info">
            <div class="book-card">
              <div class="cover">
                <img src="#" alt="Sample Image">
              </div>
              <div class="main">
                <p class="title"><strong>{{ $result->book_title }}</strong></p>
              </div>
            </div>
            <div class="book-detail-info">
              <p>
                <strong>Written By: </strong>
                <span>{{ $result->book_author }}</span>
              </p>
              <p>
                <strong>Publisher: </strong>
                <span>{{ $result->book_publisher }}</span>
              </p>
              <p>
                <strong>ISBN: </strong>
                <span>{{ $result->book_isbn }}</span>
              </p>
              <p>
                <strong>No of Pages: </strong>
                <span>{{ $result->book_pagecount }}</span>
              </p>
              <p>
                <strong>Price: </strong>
                <span>&#163;{{ $result->book_price }}</span>
              </p>
              <p>
                <strong>Description: </strong>
                <span>{{ $result->book_description }}</span>
              </p>
            </div>
          </div>
          </div>
        @endforeach
      </ul>
    @elseif(isset($message))
      <p>{{ $message }}</p>
    @endif
  </div>
</div>
@endsection