@extends('layouts.app')

@section('title', 'Book Review Site - Search')

@section('content')
<div class="container is-fluid">
  <form action="/search" method="POST">
    @livewire('search-book')
  </form>
  @if(isset($results) && count($results))
  <hr />
  <ul>
    @foreach($results as $result)
      <div class="columns">
          @livewire('book-card', ['result' => $result])
          @livewire('book-detail-info', ['result' => $result])
      </div>
    @endforeach
  </ul>
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