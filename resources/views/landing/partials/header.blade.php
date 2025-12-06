<header class="landing-header">
    <div class="landing-header-container">
        <div class="landing-header-inner">
            <div class="landing-header-brand-wrapper">
                <a href="#" class="landing-brand-link">Threadly</a>
            </div>
            <div class="landing-nav-links">
                <a href="#features" class="landing-nav-link">Features</a>
                <a href="#" class="landing-nav-link">Pricing</a>
                <a href="#" class="landing-nav-link">About</a>
            </div>
            <div class="landing-auth-links">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="landing-auth-link">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="landing-auth-link">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="landing-btn-get-started">Get Started</a>
                        @endif
                    @endauth
                @endif
            </div>
        </div>
    </div>
</header>
