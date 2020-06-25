<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Recibos;

class RecibosController extends Controller
{
    public function index()
    {
      $recibos = Recibos::all();
      return view('recibos.index')->with('recibos',$recibos);
    }
}
