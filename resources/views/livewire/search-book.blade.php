@section('styles')
  <link rel="stylesheet" href="{{ asset('css/search-book.css') }}">
@endsection


@csrf
<input type="text" name="query" placeholder="Search a book" />
<button type="submit">Search</button>
