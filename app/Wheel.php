<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class wheels extends Model
{
  use SoftDeletes;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'model', 
    'diameter', 
    'rotation', 
    'torque', 
    'materials', 
    'drive', 
    'brushless_motor', 
    'resolution', 
    'shifter_option',
    'brand_id'
  ];

  protected $dates = ['deleted_at'];

  // Relationships

  public function compatibility() {
    return $this->belongsToMany('App\Compatibility')->withTimestamps();
  }
}
