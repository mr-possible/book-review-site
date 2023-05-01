@extends('layouts.app')

@section('title', 'Book Review Site - Submit A Review')

@section('content')
<div class="container is-fluid">
  <form action="/searchbookForReview" method="POST" class="search-form">
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
    <hr />
    <p class="title is-2">Add a review</p>
    <form action="/store-review" id="user-review-form" method="POST">
      @livewire('add-review', ['result' => $result])
      <div class="field is-grouped">
        <div class="control">
          <button class="button is-primary" type="submit">Submit</button>
        </div>
      </div>
    </form>
  @elseif(isset($message))
    <p>{{ $message }}</p>
  @endif
</div>
@endsection










