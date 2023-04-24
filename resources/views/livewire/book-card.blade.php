@section('styles')
  <link rel="stylesheet" href="{{ asset('css/book.css') }}">
@endsection

<div class="book-card">
    <div class="cover">
    <img src="#" alt="Sample Image">
    </div>
    <div class="main">
    <p class="title"><strong>{{ $result->book_title }}</strong></p>
    </div>
</div>
