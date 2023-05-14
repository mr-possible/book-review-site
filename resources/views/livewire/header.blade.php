<header class="header" style="background: linear-gradient(to right, #00c6ff, #0072ff);">
    <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item is-size-2 has-text-white" href="#">
                <strong>Book Review Website</strong>
            </a>
            <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>
        <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-end">
                @if (Route::has('login'))
                    @auth
                        <a href="/home" class="navbar-item has-text-white">Home</a>
                        <a href="/my-profile" class="navbar-item has-text-white">My Profile</a>
                        <a href="/logout" class="navbar-item has-text-white">Logout</a>
                    @else
                        <a href="/login" class="navbar-item has-text-white">Log In</a>
                    @if (Route::has('register'))
                        <a href="/register" class="navbar-item has-text-white">Register</a>
                    @endif
                    @endauth
                </div>
            @endif
        </div>
    </nav>
</header>

<!-- 
                  References:
  HTML: https://developer.mozilla.org/en-US/docs/Web/HTML
  Bulma CSS: https://bulma.io/documentation/
  Livewire: https://laravel-livewire.com/docs/2.x/quickstart
  Laravel: https://laravel.com/docs/10.x/readme 
-->