<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <!-- Brand/logo linking to the homepage -->
    <a class="navbar-brand" href="{{ url('/') }}">HostelConnect</a>

    <!-- Navbar collapse button for smaller screens -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar items, aligned to the right -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            @guest <!-- Check if the user is a guest (not logged in) -->
                <!-- Login and Register links -->
                <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
            @else
                <!-- User is authenticated -->
                <!-- Link to user's profile -->
                <li class="nav-item"><a class="nav-link" href="{{ route('profile.show') }}">{{ Auth::user()->name }}</a></li>
                <!-- Logout link -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <!-- Logout form with CSRF protection -->
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            @endguest
        </ul>
    </div>
</nav>
