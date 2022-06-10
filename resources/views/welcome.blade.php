<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Movies</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <style>
            .custom-product{
                height: 450px;
            }
        </style>
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg bg-success">
            <div class="container">
            <a class="navbar-brand text-white fw-bold fs-1" href="#">{{ config('', 'Movies') }}</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="" id="navbarText">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                    <a class="nav-link text-dark fw-normal fs-6" href="{{ url('/') }}">HOME</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-dark fw-normal fs-6" href="#">LATEST</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-dark fw-normal fs-6" href="#">ABOUT</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-dark fw-light fs-6" href="#">CONTACT US</a>
                  </li>
                </ul>
              </div>
                <div class="form-check-inline my-2 my-lg-0">
                    
                    @if (Route::has('login'))
                        <div>
                            @auth
                                <a href="#">Profile</a>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">Logout</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none">
                                    @csrf
                                </form>
                            @else
                                <a class="border text-dark p-lg-2 shadow p-3 mb-5 bg-white rounded fw-bolder" href="{{ route('login') }}">LOG IN</a>
        
                                @if (Route::has('register'))
                                    <a class="border bg-primary m-lg-1 p-lg-2 text-white fw-bold shadow p-3 mb-5 bg-blue rounded" href="{{ route('register') }}">REGISTER</a>
                                    {{-- <button class="border bg-primary" style="color: #f5f5f5;" href="{{ route('register') }}">REGISTER</button> --}}
                                @endif
                            @endauth
                        </div>
                    @endif
                </div>
            </div>
        </nav>
        @can('logged-in')
        <nav class="navbar sub-nav navbar-expand-lg">
            <div class="container">
        
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                        <a class="nav-link" href="#">Movies Upload</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">View Movies</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        @endcan
        <main class="container" >
            @yield('content')
        </main>
    </body>
</html>
