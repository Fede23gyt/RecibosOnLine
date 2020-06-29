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

          @php
            $usuario=Auth::user()->dni;
          @endphp

          @if($usuario == '27059357') <!-- usuario admin -->
            <li class="nav-item">
              <a href="{{ route('recibos') }}" class="nav-link">
                <i class="fas fa-folder-open"></i>
                &nbsp;<p>Recibos de Sueldo</p>
              </a>
            </li>
          @else
            <li class="nav-item">
              <a href="{{ route('misrecibos') }}" class="nav-link">
                  <i class="fas fa-folder-open"></i>
                  &nbsp;<p>Mis Recibos</p>
              </a>
            </li>
          @endif

          <li class="nav-item">
            <a href="{{ route('home') }}" class="nav-link">
              <i class="fas fa-user-edit"></i>&nbsp;<p>Mis Datos</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('logout') }}" class="nav-link">
              <i class="fas fa-sign-out-alt"></i>
              &nbsp;<p>Salir</p>
            </a>
          </li>

        </li>
        </ul>


    </div>
    <!-- /.sidebar -->
  </aside>
