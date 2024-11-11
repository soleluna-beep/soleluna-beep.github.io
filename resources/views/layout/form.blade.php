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
<div class="container-fluid">
    @yield('corpo')
</div>


</body>
</html>