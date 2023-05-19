<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Legajo extends Model
{
  protected $table = 'legajos';
  public $timestamps = false;


  /**
   * Get all of the comments for the Legajo
   *
   * @return \Illuminate\Database\Eloquent\Relations\HasMany
   */
  public function liquixlegajo()
  {
      return $this->hasMany('App\LiquidacionNueva', 'legajo_id', 'num_leg');
  }
}
