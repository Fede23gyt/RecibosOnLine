<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-yellow navbar-light">
  <div class="container">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="{{ url('/') }}" role="button"><i class="fas fa-bars"></i></a>
      </li>

      <li class="nav-item d-none d-sm-inline-block">
        <h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;SISTEMA DE GESTION DE RECIBOS DE SUELDO</h3>
      </li>
    </ul>
    <!-- lado derecho del navbar -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">{{ Auth::user()->name }}
      </li>
    </ul>
  </div>
</nav>
