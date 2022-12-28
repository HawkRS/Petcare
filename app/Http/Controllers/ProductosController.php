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

  private $p = 'smartbites.';
  private $g = 'smartbitesgato.';
  private $t = 'titan.';
  private $r = 'rocko.';

  /**
   * Show the SMARTBITES PERRO page content settings.
   *
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function VistaSBPerro()
  {
    //dd('index smartbites');
      $ContentList = Content::where('page', 'smartbitesperro')->where('section', 'banner')->get();
      //$ContentList = DB::table('content')
      //          ->where('page', 'smartbitesperro')
      //          ->get();
      //dd($ContentList);
      return view($this->p.'banners', [
        'Contenidos' => $ContentList,
      ]);
  }

  public function VistaSBPerroPresentaciones()
  {
    $matchThese = ['cachorro','adulto','razapequeña','senior'];
    $ContentList = Content::where('page', 'smartbitesperro')
    ->whereIn('section',  $matchThese)
    ->get();
    //dd($ContentList);
    return view($this->p.'presentaciones', [
      'Contenidos' => $ContentList,
    ]);
  }

  public function VistaSBPerroBeneficios()
  {
    $ContentList = Content::where('page', 'smartbitesperro')->where('section', 'beneficios')->get();
    //dd($ContentList);
    return view($this->p.'beneficios', [
      'Contenidos' => $ContentList,
    ]);
  }


  /**
   * Show the SMARTBITES GATO page content settings.
   *
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function VistaSBGato()
  {
    //dd('index smartbites');
      $ContentList = Content::where('page', 'smartbitesgato')->where('section', 'banner')->get();
      //$ContentList = DB::table('content')
      //          ->where('page', 'smartbitesperro')
      //          ->get();
      //dd($ContentList);
      return view($this->g.'banners', [
        'Contenidos' => $ContentList,
      ]);
  }

  public function VistaSBGatoPresentaciones()
  {
    $matchThese = ['adulto'];
    $ContentList = Content::where('page', 'smartbitesgato')
    ->whereIn('section',  $matchThese)
    ->get();
    //dd($ContentList);
    return view($this->g.'presentaciones', [
      'Contenidos' => $ContentList,
    ]);
  }

  public function VistaSBGatoBeneficios()
  {
    $ContentList = Content::where('page', 'smartbitesgato')->where('section', 'beneficios')->get();
    //dd($ContentList);
    return view($this->g.'beneficios', [
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
      'section' => 'required',
      'descripcion' => 'required',
      'imgname' => 'nullable',
      'imagefile' => 'nullable|image',
     ], $messages);
     $Helper = new Helper();
    //dd($request->all());
     if($request->type == 'image'){
       $Helper->UpdateImage($request->page,$request->section,$_FILES['imagefile'],$request->imgname);
     }


     switch ($request->page) {
       case 'smartbitesperro':
         return redirect()->route('smartbites.page');
         break;
       case 'smartbitesgato':
         return redirect()->route('smartbitesgato.page');
         break;

       default:
         // code...
         break;
     }

   }







}
