@section('styles')
  <link rel="stylesheet" href="{{ asset('css/review.css') }}">
@endsection

<div class="upvote-container">
    <button class="upvote-button" wire:click="upvote({{ $review->id }}, {{ $user_id }})"> 
        <svg class="upvote-icon" viewBox="0 0 24 24">
            <path fill="currentColor" d="M12 3L2 12h3v9h14v-9h3L12 3z"/>
        </svg>
    </button>
    <p wire:key={{ $review->id }} class="upvote-count"> {{ $upvoteCount }}</p>
</div>