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
            <!-- <ul class="nav navbar-nav navbar-right">
                  @if($logged==true && $loggedRole=='admin')
                  <li><a href="{{route('ordine.index')}}" class="btn btn-prodotti" style="font-weight: bold; margin-right: 0.2cm; margin-left: 1.67cm">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                      <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5M3.14 5l.5 2H5V5zM6 5v2h2V5zm3 0v2h2V5zm3 0v2h1.36l.5-2zm1.11 3H12v2h.61zM11 8H9v2h2zM8 8H6v2h2zM5 8H3.89l.5 2H5zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0m9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0"/>
                    </svg>Ordini</a></li>
                    <div class="dropdown">
                    <button class="btn btn-testa dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Ciao {{$loggedNome}}!
                    </button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ route('utente.profile') }}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                    </svg> Profilo</a></li>
                    <li><a class="dropdown-item" href=" {{ route('utente.index') }}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                    <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
                    </svg> I nostri clienti</a></li>
                    <li><a class="dropdown-item" href="{{ route('utente.logoutrequest') }}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-power" viewBox="0 0 16 16">
                    <path d="M7.5 1v7h1V1z"/>
                    <path d="M3 8.812a5 5 0 0 1 2.578-4.375l-.485-.874A6 6 0 1 0 11 3.616l-.501.865A5 5 0 1 1 3 8.812"/>
                    </svg> Esci</a></li>
                  </ul>
                  </div>
                  @elseif($logged==true && $loggedRole=='cliente')
                  <li><a href="{{ route('utente.ordinipersonali') }}" class="btn btn-testa" style="font-weight: bold; margin-right: 0.1cm;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                      <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5M3.14 5l.5 2H5V5zM6 5v2h2V5zm3 0v2h2V5zm3 0v2h1.36l.5-2zm1.11 3H12v2h.61zM11 8H9v2h2zM8 8H6v2h2zM5 8H3.89l.5 2H5zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0m9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0"/>
                    </svg>I miei ordini</a></li>
                    <div class="dropdown">
                    <button class="btn btn-testa dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Ciao {{$loggedNome}}!
                    </button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ route('utente.profile') }}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                    </svg> Profilo</a></li>
                    <li><a class="dropdown-item" href="{{ route('utente.logoutrequest') }}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-power" viewBox="0 0 16 16">
                    <path d="M7.5 1v7h1V1z"/>
                    <path d="M3 8.812a5 5 0 0 1 2.578-4.375l-.485-.874A6 6 0 1 0 11 3.616l-.501.865A5 5 0 1 1 3 8.812"/>
                    </svg> Esci</a></li>
                  </ul>
                  </div>
                  @elseif(!$logged)
                  <li><a href="{{ route('utente.create') }}" class="btn btn-prodotti" style="font-weight: bold; margin-left: 2.1cm; margin-right: 0.2cm;">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill-add" viewBox="0 0 16 16">
                  <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                  <path d="M2 13c0 1 1 1 1 1h5.256A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1 1.544-3.393Q8.844 9.002 8 9c-5 0-6 3-6 4"/>
                  </svg> Registrati</a></li>
                    <li><a href="{{ route('utente.authentication') }}" class="btn btn-prodotti" style="font-weight: yellow;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill-check" viewBox="0 0 16 16">
                    <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                    <path d="M2 13c0 1 1 1 1 1h5.256A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1 1.544-3.393Q8.844 9.002 8 9c-5 0-6 3-6 4"/>
                    </svg>
                    Accedi</a></li>
                  @endif
                </ul> -->
                <ul class="nav navbar-nav navbar-right">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button class="btn me-md-2" type="button" style="background-color: rgb(238, 204, 118);"></button>
                <button class="btn me-md-1" type="button" style="background-color: rgb(238, 204, 118);"></button>
                <button class="btn" type="button" style="background-color: rgb(238, 204, 118);"></button>
                <button class="btn" type="button" style="background-color: rgb(238, 204, 118);"></button>
                <li><a href="{{route('prenota')}}" class="btn btn-prodotti" style="font-weight: yellow; font-style: italic">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                      <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5M3.14 5l.5 2H5V5zM6 5v2h2V5zm3 0v2h2V5zm3 0v2h1.36l.5-2zm1.11 3H12v2h.61zM11 8H9v2h2zM8 8H6v2h2zM5 8H3.89l.5 2H5zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0m9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0"/>
                </svg>
                    Prenota ora!</a></li>
                   
                </div>
                </ul>  
          </div>
        </div>
      </nav>


        <div class="container-fluid"  style="margin-top: 0.25cm;">
            @yield('breadcrumb')
        </div>

        <div class="container">
            <header class="header-sezione">
                <h1>
                    @yield('titolo1')
                </h1>
            </header>
        </div>

        <div class="container">
            @yield('corpo1')
        </div>

        <div class="container" style="margin-top: 0.5cm;">
          @yield('corpo2')
        </div>



        <div class="container-fluid" style="background-color: rgb(238, 204, 118); margin-top: 2cm;">
            @yield('footer')
        </div>

        </body>
</html>