@section('styles')
  <link rel="stylesheet" href="{{ asset('css/book.css') }}">
@endsection

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
  <!-- @if(count($result->reviews))
  <p>
      <strong>No of Reviews: </strong>
      <span>{{ count($result->reviews) }} (scroll below to see)</span>
  </p>
  @endif -->
</div>
