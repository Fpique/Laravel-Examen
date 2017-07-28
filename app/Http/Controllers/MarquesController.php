<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Marque as Marque;

class MarquesController extends Controller
{
  public function addMarque() {
    $marques = Marque::all();
    $return = array();
    foreach ($marques as $marque) {
      array_push($return, $marque->name);
    }
    return view('addMarque', ['marques' => $return]);
  }
  public function insertMarque(Request $request) {
  $marque = new Marque;
  $marque->name = $request->name;
  $marque->save();
  return redirect('/add/marque');
  }
}
