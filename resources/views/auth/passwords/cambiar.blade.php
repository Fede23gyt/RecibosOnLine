<!--@extends('layouts.app')-->
@extends('themes.lte.layout')



 @section('contenido')
   <div class="container">
     <div class="row;align:center">
       <div class="col-md-8 col-md-offset-2">
         <div class="panel panel-default">

           <div class="panel-body">
             <form class="form-horizontal;align:center" method="POST" role="form" action="{{ route('actualizar_pwd') }}">
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
               {{-- Current password --}}
               <div class="form-group{{ $errors->has('current_password') ? ' has-error' : '' }}">
                 <label for="current_password" class="col-md-4 control-label">Contraseña Actual</label>

                 <div class="col-md-6">
                   <input id="current_password" type="password" class="form-control" name="current_password" required autofocus>

                   @if ($errors->has('current_password'))
                     <span class="help-block">
                     <strong>{{ $errors->first('current_password') }}</strong>
                   </span>
                   @endif
                 </div>
               </div>

               {{-- New password --}}
               <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                 <label for="password" class="col-md-4 control-label">Contraseña</label>

                 <div class="col-md-6">
                   <input id="password" type="password" class="form-control" name="password" required>

                   @if ($errors->has('password'))
                     <span class="help-block">
                     <strong>{{ $errors->first('password') }}</strong>
                   </span>
                   @endif
                 </div>
               </div>

               {{-- Confirm new password --}}
               <div class="form-group">
                 <label for="password-confirm" class="col-md-4 control-label">Confirmar contraseña</label>

                 <div class="col-md-6">
                   <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                 </div>
               </div>

               {{-- Submit button --}}
               <div class="form-group">
                 <div class="col-md-6 col-md-offset-4">
                   <button type="submit" class="btn btn-primary">
                     Cambiar Contraseña
                   </button>
                 </div>
               </div>

             </form>
           </div>

         </div>
       </div>
     </div>
   </div>
 @endsection
