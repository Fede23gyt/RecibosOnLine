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
                @foreach ($recibos_usu as $recibos)
                <tr>
                  <td>{!! $recibos->nombre !!}</td>
                  <td align="center">{!! $recibos->dni !!}</td>
                  <td align="center">{!! $recibos->cargo !!}</td>
                  <td align="center">{!! $recibos->ano_liq !!}</td>
                  <td align="center">{!! $recibos->mes_liq !!}</td>
                  <td align="right">$&nbsp;{!! number_format($recibos->liqu,2) !!}</td>
                  <td class="text-center py-0 align-middle">
                    <div class="btn-group btn-group-sm">
                    <a href="{{ route('descargar', $recibos->id)}}" class="btn btn-info"><i class="far fa-file-pdf"></i></a>
                    </div>
                  </td>
                </tr>
                @endforeach

                <!-- CARGA LIQUIDACIONES NUEVAS-->

                @foreach ($mis_recnew as $deta_liq)

                    @php
                    $neto = $deta_liq->sum_hab_rem + $deta_liq->sum_habnorem - $deta_liq->sum_descu + $deta_liq->sum_salario;
                    @endphp

                    <tr>
                      <td>{{  $legajo->apynom  }}</td>
                      <td align="center">{{  $legajo->numdoc  }}</td>
                      <td align="center">{{  $legajo->categoria  }}</td>
                      <td align="center">{{  $deta_liq->ano_liq  }}</td>
                      <td align="center">{{  $deta_liq->mes_liq  }}</td>
                      <td align="right">$&nbsp;{{  number_format($neto,2) }}</td>
                      <td class="text-center py-0 align-middle">
                        <div class="btn-group btn-group-sm">
                          <a href="{{ route('descargar_nuevos', ['numleg' => $deta_liq->numleg, 'ano_liq' => $deta_liq->ano_liq, 'mes_liq' => $deta_liq->mes_liq,
                            'tip_liq' => $deta_liq->tip_liq]) }}"
                              class="btn btn-info"><i class="far fa-file-pdf"></i></a>
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
