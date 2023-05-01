<div class="box">
  <article class="media">
    <div class="media-content">
      <div class="content">
        <p>
          <strong>{{ $review->book_review_title }}</strong>
          <br>
          <small>By {{ $review->user->name }} - {{ $review->created_at }}</small>
          <br>
          {{ $review->book_review_body }}
        </p>
      </div>
    </div>
    @livewire('upvote-component', ['review' => $review, 'user_id' => Auth::user()->id])
  </article>
</div>