<div class="media-right">
    <button class="button is-success" wire:click="upvote({{ $review->id }}, {{ $user_id }})">
        <span class="icon is-small">
            <i class="fas fa-thumbs-up"></i>
        </span>
        <span wire:key={{ $review->id }} class="upvote-count"> {{ $upvoteCount }}</span>
    </button>
</div>