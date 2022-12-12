<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;
use App\Marcadores;

class MapController extends Controller
{
  use SoftDeletes;


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
    //dd($request->all());
    $NewMapMarker = new Marcadores;
    $NewMapMarker->name = $request->name;
    $NewMapMarker->lat = $request->lat;
    $NewMapMarker->lng = $request->lng;
    $NewMapMarker->category = $request->category;
    $NewMapMarker->address = $request->address;
    $NewMapMarker->address2 = $request->address2;
    $NewMapMarker->city = $request->city;
    $NewMapMarker->state = $request->state;
    $NewMapMarker->postal = $request->postal;
    $NewMapMarker->phone = $request->phone;
    $NewMapMarker->phone2 = $request->phone2;
    $NewMapMarker->linkmap = $request->linkmap;
    $NewMapMarker->web = $request->web;
    $NewMapMarker->hours1 = $request->hours1;
    $NewMapMarker->hours2 = $request->hours2;
    $NewMapMarker->hours3 = $request->hours3;
    $NewMapMarker->featured = $request->featured;
    $NewMapMarker->features = $request->features;
    $NewMapMarker->date = $request->date;
    $NewMapMarker->save();
    return redirect()->route('map.index');
    //$MapMarker = Marcadores::findorfail($id);

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
    //dd($MapMarker);
    $MapMarker->name = $request->name;
    $MapMarker->lat = $request->lat;
    $MapMarker->lng = $request->lng;
    $MapMarker->category = $request->category;
    $MapMarker->address = $request->address;
    $MapMarker->address2 = $request->address2;
    $MapMarker->city = $request->city;
    $MapMarker->state = $request->state;
    $MapMarker->postal = $request->postal;
    $MapMarker->phone = $request->phone;
    $MapMarker->phone2 = $request->phone2;
    $MapMarker->linkmap = $request->linkmap;
    $MapMarker->web = $request->web;
    $MapMarker->hours1 = $request->hours1;
    $MapMarker->hours2 = $request->hours2;
    $MapMarker->hours3 = $request->hours3;
    $MapMarker->featured = $request->featured;
    $MapMarker->features = $request->features;
    $MapMarker->date = $request->date;
    $MapMarker->save();
    return redirect()->route('map.index');
  }

  public function delete($id)
  {
    // code...$table->softDeletes();
    $MapMarker = Marcadores::findorfail($id);
    //dd($MapMarker);
    $MapMarker->delete();
    return redirect()->route('map.index');
  }


}
