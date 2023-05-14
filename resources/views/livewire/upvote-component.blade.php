<div class="media-right">
    <button class="button is-success" wire:click="upvote({{ $review->id }}, {{ $user_id }})">
        <span class="icon is-small">
            <i class="fas fa-thumbs-up"></i>
        </span>
        <span wire:key={{ $review->id }} class="upvote-count"> {{ $upvoteCount }}</span>
    </button>
</div>

<!-- 
                  References:
  HTML: https://developer.mozilla.org/en-US/docs/Web/HTML
  Bulma CSS: https://bulma.io/documentation/
  Livewire: https://laravel-livewire.com/docs/2.x/quickstart
  Laravel: https://laravel.com/docs/10.x/readme 
-->