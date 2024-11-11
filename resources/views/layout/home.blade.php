<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>@yield('titolo')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <!-- Fogli di stile -->
    <link rel="stylesheet" href="{{ url('/') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ url('/') }}/css/@yield('stile')">
    <!-- jQuery e plugin JavaScript -->
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="{{ url('/') }}/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('/') }}/js/validazioneInputUtente.js"></script>
</head>

<body>
<nav class="navbar navbar-expand-lg" style="background-color: rgb(238, 204, 118);" aria-label="Thirteenth navbar example">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample11" aria-controls="navbarsExample11" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span> 
          </button>
          <a class="navbar-brand col-lg-3 me-0" href="#">&nbsp;</a>
          <a href="{{route('index')}}" target="_self" style="margin-right: 0.2cm">
            <img src="img/lg2.png" alt="logo" width="50" height="50" >
          </a>
          <div class="collapse navbar-collapse d-lg-flex" id="navbarsExample11">
            <ul class="navbar-nav col-lg-9">
                @yield('left_navbar')
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button class="btn me-md-2" type="button" style="background-color: rgb(238, 204, 118);"></button>
                <button class="btn me-md-1" type="button" style="background-color: rgb(238, 204, 118);"></button>
                <button class="btn" type="button" style="background-color: rgb(238, 204, 118);"></button>
                <button class="btn" type="button" style="background-color: rgb(238, 204, 118);"></button>
                <li><a href="{{route('acquistaprodotti.index')}}" class="btn btn-prodotti" style="font-weight: yellow; font-style: italic">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                      <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5M3.14 5l.5 2H5V5zM6 5v2h2V5zm3 0v2h2V5zm3 0v2h1.36l.5-2zm1.11 3H12v2h.61zM11 8H9v2h2zM8 8H6v2h2zM5 8H3.89l.5 2H5zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0m9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0"/>
                </svg>
                    Prenota ora!</a></li>
                   
                </div>
                </ul> 
          </div>
        </div>
      </nav>

      <div class="container-fluid" style="margin-bottom: 0.75cm; background-color: rgb(238, 204, 118);">
      @yield('corpo1')
        </div>

        <div class="container-fluid">
            @yield('corpo2')
    </div>

    <div class="container-fluid" style="background-color: rgb(238, 204, 118); margin-top: 2cm;">
    @yield('footer')
</div>
