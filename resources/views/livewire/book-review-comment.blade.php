<div> 
  <hr>
  <h5 class="title is-4 has-text-centered">Comments</h5>
  <div class="content">
    <p>
      @if($review->comments->count() > 0)
        @foreach($review->comments as $comment)
          <small>
            @if($comment->user->id == auth()->user()->id)
              You
            @else
              <a href="{{ route('other-profile', ['user_id' => $comment->user->id]) }}">{{ $comment->user->name }}</a>
            @endif
            on {{ $comment->created_at }} commented:
          </small>  
          <div class="comment box py-1">
              <i>{{ $comment->comment }}</i>
              <hr>
              @if($comment->user->id === auth()->user()->id)
                <div class="buttons is-right">
                  <form wire:submit.prevent="deleteComment({{ $comment->id }})">
                    @can('delete', $comment)
                    <button type="submit" class="button is-danger is-rounded is-small">Delete</button>
                    @endcan

                    @can('edit', $comment)
                    <button type="button" class="button is-warning is-rounded is-small">Edit</button>
                    @endcan
                  </form>
                </div>     
              @endif
          </div>
        @endforeach
        <form wire:submit.prevent="addComment">
          <div class="field">
              <label class="label">Comment</label>
              <div class="control">
                  <textarea class="textarea" wire:model="comment"></textarea>
              </div>
          </div>
          <div class="field">
              <div class="control">
                  <button class="button is-primary"
                          type="submit"
                          wire:loading.attr="disabled"
                          wire:target="addComment">Add Comment</button>
              </div>
          </div>
        </form>
      @else
        <h1 class="title is-5 has-text-centered has-text-danger">No comments Yet</h1>
        <form wire:submit.prevent="addComment">
          <div class="field">
              <label class="label">Comment</label>
              <div class="control">
                  <textarea class="textarea" wire:model="comment"></textarea>
              </div>
          </div>
          <div class="field">
              <div class="control">
                  <button class="button is-primary"
                          type="submit"
                          wire:loading.attr="disabled"
                          wire:target="addComment">Add Comment</button>
              </div>
          </div>
        </form>
      @endif
    </p>
  </div>
</div>