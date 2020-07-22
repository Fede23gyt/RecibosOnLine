<!doctype html>
<html lang="es">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Bootstrap 4 -->
      <script src="{{asset('assets/lte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
      <!-- Tempusdominus Bootstrap 4 -->
      <script src="{{asset('assets/lte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>

    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                	@yield('content')
                </div>
            </div>
        </div>
    </body>
</html>
