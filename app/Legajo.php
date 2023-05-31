<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Legajo extends Model
{
  protected $table = 'legajos';
  protected $fillable = ['numleg','apynom','numdoc','cuil','categoria','fecing'];
  public $timestamps = false;


  /**
   * Get all of the comments for the Legajo
   *
   * @return \Illuminate\Database\Eloquent\Relations\HasMany
   */
  public function Legajoliquidaciones()
  {
      return $this->hasMany('App\LiquidacionNueva', 'numleg', 'numleg');
  }

  public function usuario()
{
    return $this->belongsTo(User::class, 'numdoc', 'dni');
}
}
