   <!-- Main Sidebar Container -->
   <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="ww" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Colegio</span>

    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        <li class="nav-header">OPCIONES</li>

        <li class="nav-item">
          <a href="{{ route('recibos') }}" class="nav-link">
            <i class="nav-icon far fa-image"></i>
            <p>
              Recibos de Sueldo
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('home') }}" class="nav-link">
            <i class="nav-icon fas fa-edit"></i>
            <p>
              Mis Datos
            </p>
          </a>
        </li>
      </li>
      <li class="nav-item">
        <a href="{{ route('logout') }}">Cerrar Sesion
          <!--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>-->
        </a>
      </li>
        </ul>


    </div>
    <!-- /.sidebar -->
  </aside>
