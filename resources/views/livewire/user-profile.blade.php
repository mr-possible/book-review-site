@extends('layouts.app')

@section('title', 'Book Review Site - My Profile')

@section('content')
<div class="columns">
  <div class="column is-half is-offset-one-quarter">
    <div class="box">
      <div class="columns is-centered">
        @if(Route::currentRouteName() === 'my-profile')
          <div class="column is-one-fifth">  
            <figure class="image is-1by1">
              <!-- Add 'upload image' feature later -->
              <img class="is-rounded"
                    src="{{ asset('images/dashboard-read-review.jpg') }}"
                    alt="{{Auth::user()->name }}">
            </figure>
          </div>
          <div class="column">
            <h1 class="title is-4">{{ Auth::user()->name }}</h1>
            <h2 class="subtitle is-6">{{ Auth::user()->email }}</h2>
          </div>
        @else
          <div class="column is-one-fifth">
            <figure class="image is-1by1">
              <!-- Add 'upload image' feature later -->
              <img class="is-rounded" src="{{ asset('images/dashboard-read-review.jpg') }}" alt="{{Auth::user()->name }}">
            </figure>
          </div>
          <div class="column">
            <h1 class="title is-4">{{ $user->name }}</h1>
            <h2 class="subtitle is-6">{{ $user->email }}</h2>
          </div>
        @endif
        
        <div class="column is-narrow">
          <!-- Add 'profile edit' feature later -->
          <a href="#" class="button is-warning">Edit My Profile</a>
        </div>
      </div>
    </div>
    <div class="box">
      <div class="column is-half is-offset-one-quarter has-text-centered">
        <h2 class="title is-3">User Activity Analytics</h2>
      </div>
      <table class="table is-fullwidth">
        <thead>
          <tr>
            <th class="has-text-centered">Review Title</th>
            <th class="has-text-centered">Review Date</th>
            <th class="has-text-centered">Number of Comments</th>
            <th class="has-text-centered">Number of Upvotes</th>
          </tr>
        </thead>
        <tbody>
          @foreach($reviews as $review)
          <tr>
            <td class="has-text-centered">{{ $review->book_review_title }}</td>
            <td class="has-text-centered">{{ $review->created_at->toFormattedDateString() }}</td>
            <td class="has-text-centered">{{ $review->comments->count() }}</td>
            <td class="has-text-centered">{{ $review->bookReviewUpvotes->count() }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection