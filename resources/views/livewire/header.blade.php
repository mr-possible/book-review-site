@section('styles')
  <link rel="stylesheet" href="{{ asset('css/header.css') }}">
@endsection

<div>
    <header class="header">
    <nav class="nav">
        <div class="nav__logo">
            Book Reviews
        </div>
        <div class="nav__links">
            @if (Route::has('login'))
                    @auth
                        <a href="/home">Home</a>
                        <a href="/logout">Logout</a>
                    @else
                        <a href="/login">Log In</a>
                    @if (Route::has('register'))
                        <a href="/register">Register</a>
                    @endif
                    @endauth
                </div>
            @endif
        </div>
    </nav>
    </header>
</div>
