@extends('themes.lte.layout')

@section('contenido')
  <div class='container'>
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title"><b>Listado de Liquidaciones de Sueldo</b></h3>

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
                <tr align="center">
                  <th>Apellido y Nombre</th>
                  <th>DNI</th>
                  <th>Año</th>
                  <th>Mes</th>
                  <th>Total Neto</th>
                  <th>Descargar</th>
                </tr>
              </thead>
              <tbody>
              @foreach ($recibos as $recibos)
              <tr>
                <td>{!! $recibos->nombre !!}</td>
                <td align="center">{!! $recibos->dni !!}</td>
                <td align="center">{!! $recibos->ano_liq !!}</td>
                <td align="center">{!! $recibos->mes_liq !!}</td>
                <td align="right">{!! $recibos->liqu !!}</td>
                <!--<td
                  <a class="btn btn-app">
                    <i class="far fa-file-pdf fa-2x"></i>
                  </a>
                </td>
              -->
              <td class="text-center py-0 align-middle">
                <div class="btn-group btn-group-sm">
                  <a href="#" class="btn btn-info"><i class="far fa-file-pdf"></i></a>
                </div>
              </td>
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
