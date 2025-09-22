<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'The Bono Wave')</title>
    <link rel="icon" type="image/png" href="{{ asset('favicon.png?v=2') }}">
    
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;700&family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    @stack('styles')
    
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
    <header class="main-header @yield('header_class', 'header-minimal')">
        <nav class="navbar @yield('navbar_class', 'scrolled')">
            <div class="logo">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('assets/images/hero/ikon.png') }}" alt="Logo The Bono Wave"> 
                    <span class="logo-text">THE BONO<br>WAVE</span>
                </a>
            </div>
            <ul class="nav-links">
                <li><a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }}">Home</a></li>
                <li><a href="{{ url('/phenomenon') }}" class="{{ request()->is('phenomenon') ? 'active' : '' }}">The Phenomenon</a></li>
                <li><a href="{{ url('/guide') }}" class="{{ request()->is('guide') ? 'active' : '' }}">Surfing Guide</a></li>
                <li><a href="{{ url('/trip') }}" class="{{ request()->is('trip') ? 'active' : '' }}">Plan Trip</a></li>
                <li><a href="{{ url('/gallery') }}" class="{{ request()->is('gallery') ? 'active' : '' }}">Gallery</a></li>
                
                @guest
                    @if (Route::has('login'))
                        <li><a href="{{ route('login') }}" class="btn-login-header">Login</a></li>
                    @endif
                @else
                    <li><a href="{{ url('/admin/stories') }}" class="btn-login-header">Mari Bercerita</a></li>
                    <li>
                        <a href="{{ route('logout') }}"
                           class="btn-login-header"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                @endguest
                </ul>
            <div class="hamburger-menu"><i class="fas fa-bars"></i></div>
        </nav>
        @yield('hero_content')
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="main-footer">
        <div class="footer-grid">
            <div class="footer-column about">
                <div class="logo">
                    <a href="{{ url('/') }}"><img src="{{ asset('assets/images/hero/ikon.png') }}" alt="Logo The Bono Wave"></a>
                    <span class="logo-text">THE BONO<br>WAVE</span>
                </div>
                <p>Sebuah portal didedikasikan untuk peselancar dan petualang yang ingin menaklukkan ombak sungai legendaris di Sungai Kampar, Riau.</p>
            </div>
            <div class="footer-column links">
                <h4>Jelajahi</h4>
                <ul>
                    <li><a href="{{ url('/phenomenon') }}">The Phenomenon</a></li>
                    <li><a href="{{ url('/guide') }}">Surfing Guide</a></li>
                    <li><a href="{{ url('/trip') }}">Plan Trip</a></li>
                    <li><a href="{{ url('/gallery') }}">Gallery</a></li>
                </ul>
            </div>
            <div class="footer-column contact">
                <h4>Kontak & Lokasi</h4>
                <p><i class="fas fa-map-marker-alt"></i> Desa Teluk Meranti, Pelalawan, Riau, Indonesia</p>
                <p><i class="fas fa-envelope"></i> info@thebonowave.com</p>
                <div class="social-icons">
                    <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2025 The Bono Wave. Hak Cipta Dilindungi.</p>
        </div>
    </footer>
    
    @stack('scripts') <script src="{{ asset('assets/js/script.js') }}"></script>
</body>
</html>