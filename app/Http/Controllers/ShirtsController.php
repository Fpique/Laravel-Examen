<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shirt as Shirt;
use App\Marque as Marque;

class ShirtsController extends Controller
{
  public function index() {
    $shirts = Shirt::all();
    $value = array();
    $i = 0;
    foreach ($shirts as $shirt) {
      array_push($value, [
        "taille" => $shirt->taille,
        "marque" => $shirt->id_marque,
        "id" => $shirt->id,
        "image" => $shirt->image,
        ]
      );
      foreach ($shirt->marques as $marque) {
        array_push($value[$i]["marque"], $marque->name);
      };
      $i ++;
    };
    return view('shirts', ["shirts" => $value]);
  }
  public function addShirt() {
    $marques = Marque::all();
    $marquesList = array();
    foreach ($marques as $marque) {
      $marquesList[$marque->id] = $marque->name;
    }
    return view('addShirt', ['marques' => $marquesList]);
  }
  public function insertShirt(Request $request) {
    $store = $request->image->store('public/img');
    $store = str_replace("public", "storage", $store);
    $shirt = new Shirt;
    $shirt->taille = $request->taille;
    $shirt->image = $store;
    $shirt->save();
    $shirt->marques()->attach($request->marque);
    return redirect('/shirts');
  }
  public function deleteShirt(Request $request) {
    $shirt = Shirt::find($request->id);
    $shirt->marques()->detach();
    $shirt->delete();
    return redirect('/shirts');
  }
  public function updateShirt(Request $request) {
    $shirt = Shirt::find($request->id);
    $marques = Marque::all();
    $marquesList = array();
    foreach ($marques as $marque) {
      $marquesList[$marque->id] = $marque->name;
    }
    return view('updateShirt', ['taille' => $shirt->taille, 'marque' => $marquesList, 'id' => $shirt->id]);
  }
  public function updateShirtAction(Request $request) {
    $shirt = Shirt::find($request->id);
    $shirt->taille = $request->taille;
    $shirt->save();

    $shirt->marques()->detach();
    $shirt->marques()->attach($request->marque);

    return redirect('/shirts');
  }
}
