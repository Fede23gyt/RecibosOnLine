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
              <?php
                $jubilacion = round($recibos->jubi / 16 * 11, 2);
                $inssjp = round($recibos->jubi / 16 * 3, 2);
                $jubi2  = round($recibos->jubi / 16 * 2, 2);

                if ($recibos->segu > 0) {
                  $seg_vida = 2.4;
                }
                else {
                  $seg_vida = 0;
                }

                if ($recibos->segu > 2.4) {
                    $seguro = $recibos->segu - 2.4;
                }
                else {
                    $seguro = 0;
                }
                // ATP NACIONAL ***SOLO LIQUIDACION MENSUAL ****
                if ($recibos->mes_liq >= 9 and $recibos->ano_liq = 2020){
                  $atp = $recibos->ext3;
                }
                else {
                  $atp = 0;
                }

                $total = ($recibos->basico + $recibos->antiguedad + $recibos->sfre + $recibos->d158 + $recibos->perm + $recibos->equi
                        + $recibos->tran + $recibos->asig) -
                       ($jubilacion + $inssjp + $jubi2 + $seguro + $recibos->obra + $recibos->difm + $recibos->caja + $recibos->vale +
                       $recibos->emba + $recibos->sindi + $seg_vida + $atp);

                if ($recibos->tipo == 'SAC1') {
                  $perio = "SAC 1º";
                }
                if ($recibos->tipo == 'SAC2') {
                  $perio = "SAC 2º";
                }
                if ($recibos->tipo == 'ME') {
                  $perio = $recibos->mes_liq;
                }

              ?>

              <tr>
                <td>{!! $recibos->nombre !!}</td>
                <td align="center">{!! $recibos->dni !!}</td>
                <td align="center">{!! $recibos->cargo !!}</td>
                <td align="center">{!! $recibos->ano_liq !!}</td>
                <td align="center">{!! $perio !!}</td>
                <!--<td align="center">{!! $recibos->mes_liq !!}</td>-->
                <td align="right">$&nbsp;{!! $total !!}</td>
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
