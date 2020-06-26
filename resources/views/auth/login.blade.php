@extends('layouts.app')

@section('content')
<div class="container" style="background-color: #555555" >
  <div class="login-box">
    <div class="login-logo">
      <b>SI.G.RE.SU</b>
    </div>
    <div>
    <img class="profile-user-img img-fluid img-circle" src="storage/LogoWP.png">
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <form method="POST" action="{{ route('login') }}" >
          @csrf
          <div class="input-group mb-3">
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



