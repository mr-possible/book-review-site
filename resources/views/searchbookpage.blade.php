@extends('layouts.app')

<head>
    <link rel="stylesheet" href="{{ asset('css/searchbookpage.css') }}">
    <link rel="stylesheet" href="{{ asset('css/book.css') }}">
    <link rel="stylesheet" href="{{ asset('css/search-book.css') }}">
</head>

@section('title', 'Book Review Site - Search')

@section('content')
<h1>Book Search Page</h1>
<div class="container">
  <form action="/search" method="POST" class="search-form">
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
    @elseif(isset($message))
      <p>{{ $message }}</p>
    @endif
  </div>
</div>
@endsection