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
  @if(isset($results) && count($results))
    <hr />
    <ul>
      @foreach($results as $result)
        <div class="columns">
          @livewire('book-card', ['result' => $result])
          @livewire('book-detail-info', ['result' => $result])
        </div>
        <hr />
        @if(count($result->reviews))
          <p class="title is-2">Book Reviews:</p>
          <div>
            <ul>
              @foreach($result->reviews as $review)
                  <li wire:key={{ $review->id }}>
                    @livewire('book-review', ['review' => $review])
                  </li>
                  <br />
              @endforeach
            </ul>
          </div>
        @else
          <p class="title is-3">No Reviews Yet!</p>
        @endif
      @endforeach
    </ul>
  @elseif(isset($message))
    <p>{{ $message }}</p>
  @endif
</div>
@endsection