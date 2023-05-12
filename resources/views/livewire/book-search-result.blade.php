<div>
    <hr />
    <ul>
        <div class="columns">
          @livewire('book-card', ['result' => $result])
          @livewire('book-detail-info', ['result' => $result])
        </div>
        <hr />
        @if(count($result->reviews))
          <p class="title is-2">Book Reviews:</p>
          <div>
            <ul>
              @foreach($result->reviews as $review)
                  <li wire:key={{ $review->id }}>
                    @livewire('book-review', ['review' => $review])
                  </li>
                  <br />
              @endforeach
            </ul>
          </div>
        @else
          <p class="title is-3">No Reviews Yet!</p>
        @endif
    </ul>
</div>
