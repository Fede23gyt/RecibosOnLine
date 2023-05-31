  <aside class="main-sidebar sidebar-dark-light  elevation-4">

    <a href="index3.html" class="brand-link; backgroud-color:#e6ab09">
      <img src=" {{ asset('Logo.png') }}" alt="" class="brand-image-xs img-circle elevation-3"
           style="opacity: .9">
      <span class="brand-text font-weight-light"></span>

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
          <!-- Gabriela 26031314 / Pedro 16000443 -->

          @if ($usuario == '27059357' or $usuario=='26031314' or $usuario=='36803474') <!-- usuario admin -->
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
        <!--
        <li class="nav-item">
          <a href="{{ route('cambiar') }}" class="nav-link">
            <i class="fas fa-user-edit"></i>&nbsp;<p>Mis Datos</p>
          </a>
        </li>
        -->
          <li class="nav-item">
            <a href="{{ route('logout') }}" class="nav-link">
              <i class="fas fa-sign-out-alt"></i>
              &nbsp;<p>Salir</p>
            </a>
          </li>

        </li>
        </ul>


    </div>
  </aside>
