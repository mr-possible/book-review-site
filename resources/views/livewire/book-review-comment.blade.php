<div class="box">
  <h5 class="subtitle is-4">
    <strong>Comments</strong>
  </h5>
  <hr>
  <article class="media">
    <div class="media-content">
      <div class="content">
        <p>
          @if($review->comments->count() > 0)
            @foreach($review->comments as $comment)
              <small>{{ $comment->user->name }} on {{ $comment->created_at }} commented:</small>  
              <div class="comment has-background-light">
                  {{ $comment->comment }}
              </div>
              <br>
            @endforeach
          @else
            <strong>No comments Yet</strong>
          @endif
        </p>  
        <form wire:submit.prevent="addComment">
          <div class="field">
              <label class="label">Comment</label>
              <div class="control">
                  <textarea class="textarea" wire:model="comment"></textarea>
              </div>
              {{ $updated_comments }}
          </div>
          <div class="field">
              <div class="control">
                  <button class="button is-primary" type="submit" wire:loading.attr="disabled" wire:target="addComment">
                      Add Comment
                  </button>
              </div>
          </div>
        </form>
      </div>
    </div>
  </article>
</div>
