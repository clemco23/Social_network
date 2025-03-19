<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    </head>
    <body>
        <header class="header">
            @if (Route::has('login'))
                <nav class="navbar">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="nav-link">Dashboard</a>
                        <a href="{{ route('logout') }}" class="nav-link">Se déconnecter</a>
                    @else
                        <a href="{{ route('login') }}" class="nav-link">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="nav-link">Register</a>
                        @endif
                    @endauth
                </nav>
            @endif
        </header>

        <main class="main-content">
            @if (Route::has('login'))
                <div class="welcome-message">
                    <h1>Bienvenue sur notre site Laravel</h1>
                    <p>Explorez les fonctionnalités en vous connectant ou en vous inscrivant.</p>
                </div>
            @endif
        </main>

        <footer class="footer">
            <p>&copy; {{ date('Y') }} Laravel Application. Tous droits réservés.</p>
        </footer>
    </body>
</html>
