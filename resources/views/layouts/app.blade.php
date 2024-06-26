<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Application')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ url('/') }}">
            @if(Auth::check())
                {{ Auth::user()->nombre }}
            @else
                Biblioteca
            @endif   
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login.index') }}">Login</a>
                    </li>
                @else
                    @if (Auth::user()->role_id == 1)
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('usuarios.index') }}">Gestión de Usuarios</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('usuarios.index') }}">Usuarios</a>
                        </li>
                    @endif
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('libros.index') }}">Libros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('prestamos.index') }}">Préstamos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login.logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        Logout
                        </a>
                        <form id="logout-form" action="{{ route('login.logout') }}" style="display: none;">
                            
                        </form>
                    </li>
                @endguest
            </ul>
        </div>
    </nav>


    <div class="container">
        @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
