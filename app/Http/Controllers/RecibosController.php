<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//use App\Http\Controllers\Auth;
use App\Recibos;
use App\User;
use Illuminate\Support\Facades\Auth;

class RecibosController extends Controller
{
    public function index()
    {
      $recibos = Recibos::all(); /*orderby('ano_liq');*/

      return view('recibos.index')->with('recibos',$recibos);
    }

    public function descargar($id)
    {
      //dd($id);
      $datos = Recibos::find($id);
      $pdf = \PDF::loadView('recibos.descargapdf',compact('datos'));
      return $pdf->download('ReciboSueldo.pdf');
    }

    public function misrecibos()
    {

      $dni_usu = Auth::user()->dni;
      $recibos_usu = Recibos::where('dni',$dni_usu)
                      ->orderby('ano_liq','desc')
                      ->orderby('mes_liq','desc')
                    ->get();

      return view('recibos.misrecibos')->with('recibos_usu',$recibos_usu);

    }

}
