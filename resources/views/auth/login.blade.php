@extends('layouts.app')

@section('content')


<!-- Main Content -->
<div class="container" style="background-color: #ffffff" >

  <div class="login-box">

    <div class="row align-items-center text-center">
        <div class="col-sm-4">
        <img src=" {{ asset('Logo.png') }}">
        </div>
        <div class="col-sm-8 text-center">

          <div class="row"><h4 style="color:#a12a2a">COLEGIO</h4></div>
          <div class="row"><h4 style="color:#a12a2a">JOSE MANUEL ESTRADA</h4></div>
        </div>


    </div>

    <div class="card">
      <div class="card-body login-card-body">
        <form method="POST" action="{{ route('login') }}" >
          @csrf
          <div class="input-group mb-83">
            <input type="email" class="form-control @error('email') is-invalid @enderror"
              name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email" id="email" >
              @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>

          <div class="input-group mb-3">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"
            required autocomplete="current-password" placeholder="Contraseña">
              @error('password')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
          </div>

          <div class="row">
            <div class="col-8">
              <div class="icheck-primary">
                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label for="remember">
                  Recordarme
                </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" class="btn btn-block btn-outline-warning">Ingresar</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
  <!-- /.login-box -->
</div>

@endsection



