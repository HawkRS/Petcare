<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\SoftDeletes;
use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Content;
use App\Helper;

class ProductosController extends Controller
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

  private $f = 'smartbites.';

  /**
   * Show the smartbites page content settings.
   *
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function index()
  {
    //dd('index smartbites');
      //$ContentList = Content::where('page', 'landing')->get();
      $ContentList = DB::table('content')
                ->where('page', 'smartbites')
                ->get();
      //dd($ContentList);
      return view($this->f.'index', [
        'Contenidos' => $ContentList,
      ]);
  }

  public function UpdateContent(Request $request)
  {
    $messages = [
    'required' => 'El campo :attribute es obligatorio.',
    ];
    $this->validate(request(), [
      'page' => 'required',
      'type' => 'required',
      'position' => 'required',
      'descripcion' => 'required',
      'imagefile' => 'nullable|image',
     ], $messages);
     $Helper = new Helper();
     if($request->type == 'image'){
       $Helper->UpdateImage($request);
     }
     dd($request->all());
   }
}
