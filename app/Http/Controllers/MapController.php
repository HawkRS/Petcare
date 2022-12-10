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
    return view($this->f.'edit', [
      'MarcadorEdit' => $MapMarker,
    ]);
  }

  public function store(Request $request, $id)
  {
    dd($request->all());
    $MapMarker = Marcadores::findorfail($id);
    return view($this->f.'index', [
      'marcadore' => $MapMarkersList,
    ]);
  }


}
