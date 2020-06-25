@extends('themes.lte.layout')

@section('contenido')
<div class='container'>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Listado de Liquidaciones de Sueldo</h3>

          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <input type="text" name="table_search" class="form-control float-right" placeholder="Buscar">

              <div class="input-group-append">
                <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
          <table class="table table-hover text-nowrap">
            <thead>
              <tr>
                <th>Apellido y Nombre</th>
                <th>DNI</th>
                <th>Año</th>
                <th>Mes</th>
                <th>Total Neto</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($recibos as $recibos)
            <tr>
              <td>{!! $recibos->nombre !!}</td>
              <td>{!! $recibos->dni !!}</td>
              <td>{!! $recibos->ano_liq !!}</td>
              <td>{!! $recibos->mes_liq !!}</td>
              <td>{!! $recibos->liqu !!}</td>
            </tr>
            @endforeach

            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>
</div>
@endsection
