 <!-- header -->
 <header id="header" class="fixed-top">

    <!-- .navbar -->
    <nav id="navbar" class="navbar nav-tb">
        <form id="logout-form" method="POST" action="{{ route('logout') }}" style="display: none;">
            @csrf
        </form>
        <!--image logo -->
        <a href="{{ route('home') }}" class="logo">
            <img src="{{ asset('assets/images/logo.jpeg') }}" alt="" class="img-fluid rounded">
        </a>

        <ul>
            <li><a class="nav-link scrollto {{ is_active_route('/') }}" href="{{ route('home') }}">Home</a></li>
            <li class="dropdown">
                <a class="{{ is_active_route('/product') }}" href="#">Products <i class="bi bi-chevron-down"></i>
                </a>
                <ul>
                    <li><a href="{{ route('product') }}">Product One</a></li>
                    <li><a href="{{ route('product') }}">Product Two</a></li>
                </ul>
            </li>

            <li><a class="nav-link scrollto {{ is_active_route('/pricing') }}" href="{{ route('pricing') }}">Pricing</a></li>
            <li><a class="nav-link scrollto {{ is_active_route('/tools') }}" href="{{ route('tools') }}">Tools</a></li>
            <li><a class="nav-link scrollto {{ is_active_route('/support') }}" href="{{ route('support') }}">Support</a></li>
            <li><a class="nav-link scrollto {{ is_active_route('/contact') }}" href="{{ route('contact') }}">Contact</a></li>
        </ul>
        <div class="nav-right">
            @guest
                <a class="login scrollto1 me-2" href="{{ url('/login') }}">Login</a>
            @else
                <a class="login scrollto1 me-2" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
            @endguest

            <button class="contact_us scrollto" href="#">
                <span class="icon-container">
                    <i class="bi bi-arrow-right-circle-fill"></i>
                </span>
                <span class="contact"> Start free 7-day trial</span>

            </button>
        </div>
        <i class="bi mobile-nav-toggle bi-list"></i>
    </nav>
    <!-- .navbar -->
</header>
<!-- End Header -->