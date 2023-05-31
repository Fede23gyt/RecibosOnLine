<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LiquidacionNueva extends Model
{
  protected $table = 'liquidacion_nueva';
  protected $fillable = ['codigo','descripcion','hab_rem','hab_norem','descu','salario','numleg','ano_liq','mes_liq','tip_liq'];
  public $timestamps = false;


  public function liquixlegajo()
    {
        return $this->belongsTo('App\Legajo', 'numleg', 'numleg');
    }
}

