<div class="column">
  <div class="book-detail-info">
    <p>
      <strong>Written By: </strong>
      <span>{{ $result->book_author }}</span>
    </p>
    <p>
      <strong>Publisher: </strong>
      <span>{{ $result->book_publisher }}</span>
    </p>
    <p>
      <strong>ISBN: </strong>
      <span>{{ $result->book_isbn }}</span>
    </p>
    <p>
      <strong>No of Pages: </strong>
      <span>{{ $result->book_pagecount }}</span>
    </p>
    <p>
      <strong>Price: </strong>
      <span>&#163;{{ $result->book_price }}</span>
    </p>
    <p>
      <strong>Description: </strong>
      <span>{{ $result->book_description }}</span>
    </p>
  </div>
</div>

<!-- 
                  References:
  HTML: https://developer.mozilla.org/en-US/docs/Web/HTML
  Bulma CSS: https://bulma.io/documentation/
  Livewire: https://laravel-livewire.com/docs/2.x/quickstart
  Laravel: https://laravel.com/docs/10.x/readme 
-->