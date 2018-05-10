<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drive extends Model
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
  public function wheel() {
    return $this->hasMany('App\Wheel')->withTimestamps();
  }
}
