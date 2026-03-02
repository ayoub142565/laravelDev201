<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'MegaShop')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <div class="header-content">
            <div class="logo"><a href="{{ route('home') }}" style="color:white;text-decoration:none">MegaShop</a></div>
            <nav>
                <ul>
                    <li><a href="{{ route('home') }}">Accueil</a></li>
                    @foreach($categories as $cat)
                        <li><a href="{{ route('category', ['slug' => $cat['slug']]) }}">{{ $cat['name'] }}</a></li>
                    @endforeach
                    <li><a href="{{ route('cgv') }}">CGV</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2026 MegaShop - Tous droits réservés</p>
        <div class="footer-links">
            <a href="{{ route('cgv') }}">CGV</a>
            <a href="{{ route('contact') }}">Contact</a>
            <a href="#">Mentions Légales</a>
        </div>
        <p><strong>Email :</strong> info@megashop.com | <strong>Téléphone :</strong> +212 1 23 45 67 89</p>
    </footer>
</body>
</html>