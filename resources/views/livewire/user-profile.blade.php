@extends('layouts.app')

@section('title', 'Book Review Site - My Profile')

@section('content')
<div class="columns">
  <div class="column is-half is-offset-one-quarter">
    <div class="box">
      <div class="columns is-centered">
        @if(Route::currentRouteName() === 'my-profile')
          <div clss="column is-one-fifth">
            <figure class="image is-128x128">
              <!-- Add 'upload image' feature later -->
              <img src="#" alt="{{Auth::user()->name }}">
            </figure>
          </div>  
          <div class="column">
            <h1 class="title is-4">{{ Auth::user()->name }}</h1>
            <h2 class="subtitle is-6">{{ Auth::user()->email }}</h2>
          </div>
        @else
          <div class="column is-one-fifth">
            <figure class="image is-128x128">
              <!-- Add 'upload image' feature later -->
              <img src="#" lt="{{ $user->name }}">
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
        <h2 class="title is-4">Analytics</h2>
      </div>
      <table class="table is-fullwidth">
        <thead>
          <tr>
            <th>Review Title</th>
            <th>Review Date</th>
            <th>Number of Comments</th>
            <th>Number of Upvotes</th>
          </tr>
        </thead>
        <tbody>
          @foreach($reviews as $review)
          <tr>
            <td>{{ $review->book_review_title }}</td>
            <td>{{ $review->created_at }}</td>
            <td>{{ $review->comments->count() }}</td>
            <td>{{ $review->bookReviewUpvotes->count() }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection