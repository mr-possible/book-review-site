@section('styles')
  <link rel="stylesheet" href="{{ asset('css/book.css') }}">
  <link rel="stylesheet" href="{{ asset('css/review.css') }}">
@endsection

<div class="comment-main-level">
    <div class="comment-box">
        <div class="comment-head">
          <i class="fa fa-heart"></i>
          <h4>{{ $review->book_review_title }}</h4>
          <span>By <i>{{ $review->user->name }}</i> - {{ $review->created_at }}</span>
        </div>
        <div class="comment-content">
          <p>{{ $review->book_review_body }}</p>
          @livewire('upvote-component', ['review' => $review, 'user_id' => 4])
        </div>
    </div>
</div>
