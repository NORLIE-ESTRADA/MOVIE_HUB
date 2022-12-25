<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>MovieHub</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ mix('/js/app.js') }}"></script>
    <link rel="icon" type="image/x-icon" href="{{asset('favicon.ico')}}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 py-3">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="/">MOVIE<span class="text-danger">HUB</span></a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                </ul>
                <form class="nav-item" action='/search=' method="get" onsubmit="this.action += this.querySelector('#query').value;">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" id="query">
                        <button class="btn btn-link position-absolute top-0 mt-3" style="left:82%">
                            <i class="bi bi-search text-dark "></i>
                        </button>
                </form>
                <ul class="navbar-nav mx-3 mb-2 mb-lg-0 text-white">
                @if( auth()->check() )
                <li class="nav-item">
                    <a class="nav-link font-weight-bold" href="/profile/{{auth()->user()->id}}">{{ auth()->user()->name }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/logout">Log Out</a>
                </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Log In</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/register">Register</a>
                    </li>
                @endif
                </ul>
                
            </div>
        </div>
    </nav>    
    <div id="app">
        @yield('content')
        <footing></footing>
    </div>
    
</body>
</html>