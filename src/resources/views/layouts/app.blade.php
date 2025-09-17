<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cyber</title>

    {{-- Подключаем JS и CSS (Bootstrap импортируем внутри app.js) --}}
    @vite(['resources/js/app.js', 'resources/sass/app.scss'])
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
    <div class="container">

        <a class="navbar-brand" href="{{ route('super.index') }}">МойСайт</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('main.index') }}">Main</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('post.index') }}">Post</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about.index') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact.index') }}">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<main class="container">
    @yield('main')
</main>

</body>
</html>
