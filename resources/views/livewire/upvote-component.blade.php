@section('styles')
  <link rel="stylesheet" href="{{ asset('css/review.css') }}">
@endsection

<!-- See the user id is passed/hardcoded as 1 now, once the auth stuff is started, work on this! -->
<div class="upvote-container">
    <button class="upvote-button" wire:click="upvote({{ $review->id }}, {{ $user_id }})"> 
        <svg class="upvote-icon" viewBox="0 0 24 24">
            <path fill="currentColor" d="M12 3L2 12h3v9h14v-9h3L12 3z"/>
        </svg>
    </button>
    <span class="upvote-count">{{ $this->getNumberOfUpvotes($review->id)->upvote_count }}</span>
</div>