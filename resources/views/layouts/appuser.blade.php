<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>E-tourism Balikpapan</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <a class="btn btn-sm text-white" href="{{ url('/') }}">Etourism Balikpapan</a>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="btn btn-sm active text-white" aria-current="page" href="{{ url('/post') }}">Wisata</a>
                </li>
                <li class="nav-item">
                <a class="btn btn-sm active text-white" href="{{ url('/kecamatan') }}">Kecamatan</a>
                </li>
                <li class="nav-item">
                <a class="btn btn-sm active text-white" href="{{ url('/akomodasi') }}">Akomodasi</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @if(Auth::check() && Auth::user()->admin == 1)
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('admin/dashboard') }}">{{ __('Dashboard') }}</a>
                            </li>
                            
                        @elseif(Auth::check() && Auth::user()->admin != 1)
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                    <a href="{{ url('/changepassword') }}" class="dropdown-item">
                                            Change Passwords
                                    </a>
                                    <a href="{{ url('edituser') }}" class="dropdown-item">
                                         Edit Profile
                                     </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @else
                            @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @endif
                                
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                        @endif
                    </ul>

            </div>
        </div>
        </nav>

        <main class="py-4">
            <div class="container">
                @yield('content')
            </div>
    
        </main>
    </div>
</body>
<footer class="bg-light text-center text-lg-start">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
    © 2020 Copyright:
    <a class="text-dark">Kelompok 2 B.R.I E-Tourism Balikpapan</a>
  </div>
  <!-- Copyright -->
</footer>
</html>
