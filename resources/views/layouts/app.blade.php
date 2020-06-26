<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>SI.G.RE.S. | Colegio José Manuel Estrada</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset("assets/lte/plugins/fontawesome-free/css/all.min.css")}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset("assets/lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css")}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset("assets/lte/dist/css/adminlte.min.css")}}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition login-page" style="background-color: rgb(180, 178, 178)">
    <div id="app">

      <main class="py-4">
          @yield('content')
      </main>
    </div>

    <!-- Bootstrap 4 -->
    <script src="{{asset('assets/lte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- jQuery -->
    <script src="{{asset('assets/lte/plugins/jquery/jquery.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('assets/lte/dist/js/adminlte.js')}}"></script>
</body>
</html>
