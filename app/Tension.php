<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tension extends Model
{
  use SoftDeletes;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'name'
  ];

  protected $dates = ['deleted_at'];

  // Relationships

  public function pedal() {
    return $this->belongsTo('App\Pedal');
  }

  public function brake() {
    return $this->belongsTo('App\Brake');
  }
}
