@extends('themes.lte.layout')

@section('contenido')
  <div class='container'>
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title"><b>Listado de Liquidaciones de Sueldo</b></h3>
          </div>
          <div class="card-body">
            <table id="listadorecibos" class="table table-bordered table-striped">
              <thead>
                <tr align="center">
                  <th>Apellido y Nombre</th>
                  <th>DNI</th>
                  <th>Cargo</th>
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
                <td align="center">{!! $recibos->cargo !!}</td>
                <td align="center">{!! $recibos->ano_liq !!}</td>
                <td align="center">{!! $recibos->mes_liq !!}</td>
                <td align="right">$&nbsp;{!! $recibos->liqu !!}</td>
                <td class="text-center py-0 align-middle">
                  <div class="btn-group btn-group-sm">
                  <a href="{{ route('descargar', $recibos->id)}}" class="btn btn-info"><i class="far fa-file-pdf"></i></a>
                  </div>
                </td>
              </tr>
              @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
