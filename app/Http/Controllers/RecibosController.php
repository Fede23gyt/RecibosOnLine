<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Legajo;
//use App\Http\Controllers\Auth;
use App\Recibos;
use App\LiquidacionNueva;
use App\User;
use Illuminate\Support\Facades\Auth;
use NumerosEnLetras;

class RecibosController extends Controller
{
    public function index()
    {
      $recibos_admin = Recibos::where('ano_liq','>=',2022)
                              ->where('mes_liq','>=',1)->get();


      $recibos_nuevos = Legajo::with(['Legajoliquidaciones' => function ($query) {
        $query->select('numleg','ano_liq','mes_liq','tip_liq')
            ->selectRaw('SUM(hab_rem) as sum_hab_rem')
            ->selectRaw('SUM(hab_norem) as sum_hab_norem')
            ->selectRaw('SUM(descu) as sum_descu')
            ->selectRaw('SUM(salario) as sum_salario')
            ->where('ano_liq', '>=',2023)
            ->where('mes_liq', '>=', 4)
            ->groupBy('numleg','ano_liq','mes_liq','tip_liq');
            }])
          ->select('apynom', 'numdoc', 'categoria','numleg')
          ->get();



      return view('recibos.index', compact('recibos_admin', 'recibos_nuevos'));

    }

    public function descargar($id)
    {
      $datos = Recibos::find($id);

      $pdf = \PDF::loadView('recibos.descargapdf',compact('datos'));
      return $pdf->stream('ReciboSueldo.pdf',compact('datos'));
    }

    public function misrecibos()
    {

      $dni_usu = Auth::user()->dni;

      $recibos_usu = Recibos::where('dni',$dni_usu)
                      ->orderby('id','desc')
                      ->orderby('ano_liq','desc')
                      ->orderby('mes_liq','desc')
                    ->get();


      $usuarioDni = Auth::user()->dni;

      $legajo = Legajo::whereHas('usuario', function ($query) use ($usuarioDni) {
              $query->where('numdoc', $usuarioDni);
          })
          ->select('apynom', 'numdoc', 'categoria', 'numleg')
          ->first();

      if ($legajo) {
        $mis_recnew = $legajo->Legajoliquidaciones()
              ->select('numleg', 'ano_liq', 'mes_liq', 'tip_liq')
              ->selectRaw('SUM(hab_rem) as sum_hab_rem')
              ->selectRaw('SUM(hab_norem) as sum_hab_norem')
              ->selectRaw('SUM(descu) as sum_descu')
              ->selectRaw('SUM(salario) as sum_salario')
              ->where('ano_liq', '>=', 2023)
              ->where('mes_liq', '>=', 4)
              ->groupBy('numleg', 'ano_liq', 'mes_liq', 'tip_liq')
              ->get();

        return view('recibos.misrecibos', compact('recibos_usu', 'mis_recnew','legajo'));
      } else {
          // Manejar el caso en el que no se encuentra un legajo asociado al usuario
      }
    }

    public function descargar_nuevos($numleg,$ano_liq,$mes_liq,$tip_liq)
    {
      $datos_leg = Legajo::where('numleg',$numleg)->first();


      $datos_liq = LiquidacionNueva::where('numleg',$numleg)
        ->where('ano_liq',$ano_liq)
        ->where('mes_liq',$mes_liq)
        ->where('tip_liq',$tip_liq)
        ->orderBy('codigo','asc')
        ->get();

      $pdf = \PDF::loadView('recibos.descargapdfnuevos',compact('datos_leg','datos_liq','ano_liq','mes_liq','tip_liq'));


      //return view('recibos.descargapdfnuevos',compact('datos_leg','datos_liq','ano_liq','mes_liq','tip_liq'));
      return $pdf->stream('ReciboSueldoN.pdf');

    }


}
