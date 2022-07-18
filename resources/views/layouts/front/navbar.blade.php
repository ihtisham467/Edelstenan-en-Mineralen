<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="#page-top">
            Logo
            {{-- <img src="{{ asset('front_theme/assets/img/navbar-logo.svg') }}" alt="..." /> --}}
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars ms-1"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                <li class="nav-item"><a class="nav-link" href="{{ route('welcome') }}#services">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('welcome') }}#portfolio">Stones</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('welcome') }}#about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('welcome') }}#team">Team</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('welcome') }}#contact">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>