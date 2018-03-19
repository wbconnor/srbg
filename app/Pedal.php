<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedal extends Model
{
  use SoftDeletes;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'model', 'clutch', 'hard_mount', 'resolution', 'brand_id', 'tension_id'
  ];

  protected $dates = ['deleted_at'];

  // Relationships
  public function compatibility() {
    return $this->belongsToMany('App\Compatibility')->withTimestamps();
  }

  public function connection() {
    return $this->belongsToMany('App\Connection')->withTimestamps();
  }
}
