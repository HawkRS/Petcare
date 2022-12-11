<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Marcadores;

class MapController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
      $this->middleware('auth');
  }

  private $f = 'findus.';

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function index()
  {
    $MapMarkersList = Marcadores::all();
    //dd($MapMarkersList);
    return view($this->f.'index', [
      'marcadores' => $MapMarkersList,
    ]);
  }

  public function edit($id)
  {
    $MapMarker = Marcadores::findorfail($id);
    //dd($MapMarker);
    //dd($MapMarker->date);
    return view($this->f.'edit', [
      'MarcadorEdit' => $MapMarker,
    ]);
  }

  public function store(Request $request)
  {
    dd($request->all());
    //$MapMarker = Marcadores::findorfail($id);
    return view($this->f.'index', [
      'marcadore' => $MapMarkersList,
    ]);
  }

  static public function isCodigoPostal($codigo) {
  	return preg_match('/^[0-9]{5,5}$/', $codigo);
  }

  public function update(Request $request, $id)
  {
    $messages = [
      'required' => 'El campo :attribute es obligatorio.',
      'date' => 'El campo :attribute tiene un formato de fecha dd/mm/aaaa.',
      'regex' => 'El campo :attribute tiene un formato invalido'
    ];
    $this->validate(request(), [
      'name' => 'required',
      'category' => 'required',
      'state' => 'required',
      'city' => 'required',
      'address' => 'required',
      'postal' => 'required|regex:/^[0-9]{5,5}$/',
      'phone' => 'required',
      'lat' => 'required|numeric',
      'lng' => 'required|numeric',
      'date' => 'required|date',
    ], $messages);
    $MapMarker = Marcadores::findorfail($id);
    dd($MapMarker);
    return view($this->f.'index', [
      'marcadore' => $MapMarkersList,
    ]);
  }


}
