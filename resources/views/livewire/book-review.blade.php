<div class="box">
  <article class="media">
    <div class="media-content">
      <div class="content">
        <p>
          <strong>{{ $review->book_review_title }}</strong>  
          By
          @if($review->user->id == auth()->user()->id)
            You
          @else
            <a href="{{ route('other-profile', ['user_id' => $review->user->id]) }}">{{ $review->user->name }}</a>
          @endif
            - {{ $review->created_at->toFormattedDateString() }}
          <br>
          <span class="subtitle is-3">&ldquo;</span>{{ $review->book_review_body }}<span class="subtitle is-3">&rdquo;</span>
          <div>
            <figure class="image is-128x128">
                <img src="{{ Storage::url($review->image_path) }}" />
            </figure>
          </div>
        </p>
      </div>
    </div>
    @livewire('upvote-component', ['review' => $review, 'user_id' => Auth::user()->id])
  </article>
  @livewire('book-review-comment', ['review' => $review])
</div>