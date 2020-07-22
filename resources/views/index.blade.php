<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SI.G.RE.SU. | Colegio José Manuel Estrada</title>

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <style>
          html, body {
              background-color: rgb(90, 87, 87);
              color: #daa542;
              font-family: 'Nunito', sans-serif;
              font-weight: 200;
              height: 100vh;
              margin: 0;
          }

          .full-height {
              height: 95vh;
          }

          .flex-center {
              align-items: center;
              display: flex;
              justify-content: center;
          }

          .position-ref {
              position: relative;
          }

          .top-right {
              position: absolute;
              right: 10px;
              top: 18px;
          }

          .content {
              text-align: center;
          }

          .title {
              font-size: 84px;
          }
          .subtitle {
              font-size: 48px;
          }

          .links > a {
              color: #daa542;
              padding: 0 25px;
              font-size: 13px;
              font-weight: 600;
              letter-spacing: .1rem;
              text-decoration: none;
              text-transform: uppercase;
          }

          .m-b-md {
              margin-bottom: 70px;
          }
          .t-m-md {
              margin-bottom: 60px;
          }
      </style>
  </head>

  <body>

    <div class="flex-center position-ref  full-height" style="align:center">

          @if (Route::has('login'))
              <div class="top-right links">
                  @auth
                      <a href="{{ url('/home') }}">Home</a>
                  @else
                      <a href="{{ route('login') }}">Ingresar</a>

                      @if (Route::has('register'))
                          <a href="{{ route('register') }}">Registrarse</a>
                      @endif
                  @endauth
              </div>
          @endif

          <div class="content">
            <div class="flex-center position.ref"><img src=" {{ asset('Logo.png') }}">
            </div>
              <div class="title m-b-md">
                  SI.G.RE.SU.
              </div>
              <div class="subtitle t-m-md">
                Sistema de Gestión de Recibos de Sueldo
            </div>
          </div>
      </div>

      <footer class=class="top-right links"><strong>Colegio José Manuel Estrada 2020 - </strong>Todos los derechos reservados.

      </footer>
  </body>
</html>
