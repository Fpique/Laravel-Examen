<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shirt extends Model
{
    public $timestamps = false;

    public function marques() {
      return $this->belongsTo('App\Marque');
    }
}
