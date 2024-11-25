<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>
<body>
    <nav>
        @guest
            <x-nav-link href="/login" :active="request()->is('login')">Login</x-nav-link>
        @endguest

        @auth
            <form method="POST" action="/logout">
                @csrf
                
                <button type="submit">Logout</button>
            </form>
        @endauth
    </nav>
    <header>
        <h1>{{ $heading }}</h1>
    </header>
    {{ $slot }}
</body>
</html>