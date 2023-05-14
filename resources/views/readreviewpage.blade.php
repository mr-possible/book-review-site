@extends('layouts.app')

<head>
    <!-- DO NOT REMOVE THIS SECTION. UPVOTES WORK PROPERLY BECAUSE OF THIS ! -->
    <livewire:scripts />
</head>

@section('title', 'Book Review Site - Read Review')

@section('content')
<div class="container is-fluid">
  <form action="/readreview" method="POST" class="search-form">
    @livewire('search-book')
  </form>
  @if(isset($result))
    @livewire('book-search-result', ['result' => $result])
  @elseif(isset($message))
    <p>{{ $message }}</p>
  @endif
</div>
@endsection

<!-- 
                  References:
  HTML: https://developer.mozilla.org/en-US/docs/Web/HTML
  Bulma CSS: https://bulma.io/documentation/
  Livewire: https://laravel-livewire.com/docs/2.x/quickstart
  Laravel: https://laravel.com/docs/10.x/readme 
-->