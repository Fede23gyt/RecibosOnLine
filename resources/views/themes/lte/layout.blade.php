
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SI.G.RE.S. | Colegio José Manuel Estrada</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">



    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ asset("assets/lte/plugins/fontawesome-free/css/all.min.css" )}}">

    <link rel="stylesheet" href="{{ asset("assets/lte/dist/css/adminlte.min.css")}}">

    <link rel="stylesheet" href="{{ asset("assets/lte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css")}}">
    <link rel="stylesheet" href="{{ asset("assets/lte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css")}}">

    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <link rel="stylesheet" href="{{ asset("assets/lte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css")}}">

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">



  </head>

  <body class="hold-transition sidebar-mini layout-fixed">

    <!-- Site wrapper -->
    <div class="wrapper">
      <!--inicio header-->
      @include("themes/lte/header")

      <!--inicio aside-->
      @include("themes/lte/aside")

      <!-- contenido de la pagina -->
      <div class="content-wrapper">

        <section class="content">
            @yield('contenido')
        </section>

      </div>

      <!-- inicio footer -->
      @include("themes/lte/footer")

    </div>

    <!-- jQuery -->
    <script src="{{asset('assets/lte/plugins/jquery/jquery.min.js')}}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{asset('assets/lte/plugins/jquery-ui/jquery-ui.min.js')}}"></script>

    <!-- Bootstrap 4 -->
    <script src="{{asset('assets/lte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- DataTables -->
    <script src="{{asset('assets/lte/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/lte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('assets/lte/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('assets/lte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>

    <!-- AdminLTE App -->
    <script src="{{asset('assets/lte/dist/js/adminlte.js')}}"></script>
    <script src="{{asset('assets/lte/dist/js/adminlte.min.js')}}"></script>

    <script>
      $(function () {
        $("#listadorecibos").DataTable({
          "responsive": true,
          "autoWidth": false,
          "language": idioma_espanol,
        });


      });
      var idioma_espanol=
      {
          "sProcessing":     "Procesando...",
          "sLengthMenu":     "Mostrar _MENU_ registros",
          "sZeroRecords":    "No se encontraron resultados",
          "sEmptyTable":     "Ningún dato disponible en esta tabla",
          "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
          "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
          "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
          "sInfoPostFix":    "",
          "sSearch":         "Buscar:",
          "sUrl":            "",
          "sInfoThousands":  ",",
          "sLoadingRecords": "Cargando...",
          "oPaginate": {
              "sFirst":    "Primero",
              "sLast":     "Último",
              "sNext":     "Siguiente",
              "sPrevious": "Anterior"
          },
          'processing': true,
          'serverSide': true,
          'bServerSide': true, // con esto cargara los datos paginados
          "oAria": {
              "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
              "sSortDescending": ": Activar para ordenar la columna de manera descendente"
          },
          "buttons": {
              "copy": "Copiar",
              "colvis": "Visibilidad"
          }
      }

    </script>
  </body>
</html>
