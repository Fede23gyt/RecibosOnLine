@extends('themes.lte.layout')

@section('contenido')
<div class="row justify-content-center">
  <br />
  <div class="card card-info" style="width: 600px">
    <div class="card-header" style="background-color: #86807dda">
      <h3 class="card-title">Cambio de Contraseña</h3>
    </div>

    <form class="form-horizontal"  method="POST" action="{{ route('actualizar_pwd') }}">
      <!-- MUESTRA ERRORES AL HACER EL POST -->
      @if (count($errors) > 0)
        <div class="alert alert-danger">
          <ul>
             @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
             @endforeach
          </ul>
        </div>
      @endif
      {{ csrf_field() }}
      <div class="card-body">
        {{-- Current password --}}
        <div class="form-group row {{ $errors->has('current_password') ? ' has-error' : '' }}">
          <label for="current_password" class="col-sm-4 col-form-label">Contraseña Actual</label>
          <div class="col-sm-7">
            <input type="password" class="form-control" id="current_password" placeholder="Contraseña actual" required autofocus>
            @if ($errors->has('current_password'))
              <span class="help-block">
                <strong>555{{ $errors->first('current_password') }}</strong>
              </span>
            @endif
          </div>
        </div>
        {{-- New password --}}
        <div class="form-group row {{ $errors->has('password') ? ' has-error' : '' }}">
          <label for="password" class="col-sm-4 col-form-label">Contraseña Nueva</label>
          <div class="col-sm-7">
            <input type="password" class="form-control" id="password" placeholder="Password" required>
            @if ($errors->has('password'))
              <span class="help-block">
              <strong>{{ $errors->first('password') }}</strong>
              </span>
            @endif
          </div>
        </div>
        {{-- Confirm new password --}}
        <div class="form-group row">
          <label for="password-confirm" class="col-sm-4 col-form-label">Confirmar Contraseña</label>
          <div class="col-sm-7">
            <input type="password" class="form-control" id="password-confirm" name="password_confirmation" required>
          </div>
        </div>
      </div>

      <div class="card-footer">
        <button type="submit" class="btn btn-info">Confirmar Cambios</button>
      </div>

    </form>
  </div>

</div>
@endsection
