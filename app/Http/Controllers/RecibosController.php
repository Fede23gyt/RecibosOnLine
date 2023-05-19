<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Legajo;
//use App\Http\Controllers\Auth;
use App\Recibos;
use App\LiquidacionNueva;
use App\Legajos;
use App\User;
use Illuminate\Support\Facades\Auth;
use NumerosEnLetras;

class RecibosController extends Controller
{
    public function index()
    {
      $recibos_admin = Recibos::where('ano_liq','>=',2021)
                              ->where('mes_liq','>=',1)->get();

      //$recibos_admin = Recibos::all();

      $recibos_nuevos = Legajo->with('liquixlegajo')

      $recibos_nuevos = LiquidacionNueva::where('ano_liq','>=',2023)
                                        ->where('mes_liq','>=',1)
                                        ->with('liquixlegajo')->get();


      /*
      return view('recibos.index')->with('recibos_admin',$recibos_admin)
            ->with('recibos_nuevos',$recibos_nuevos);
      */
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

      $mis_recnew = LiquidacionNueva::with('liquixlegajo')
        ->where('numdoc',$dni_usu)
        ->get();


      return view('recibos.misrecibos', compact('$recibos_usu', '$mis_recnew'));

      /* return view('recibos.misrecibos')->with('recibos_usu',$recibos_usu); */


    }

}
