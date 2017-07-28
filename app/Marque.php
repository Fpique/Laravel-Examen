<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marque extends Model
{
  public $timestamps = false;

  public function shirts() {
    return $this->belongsToMany('App\Shirt');
  }
}
