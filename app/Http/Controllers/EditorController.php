<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\SoftDeletes;
use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Content;
use App\Helper;

class EditorController extends Controller
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

  private $f = 'smartbites.';

  /**
  *
  * SMART BITES PERRO VIEW FUNCTIONS
  *
  */

  public function sbperro_banner()
  {
    $ContentList = DB::table('content')
    ->where('page', 'smartbitesperro')
    ->where('section', 'banner')
    ->get();
    //dd($ContentList);
    return view($this->f.'banners', [
      'Contenidos' => $ContentList,
    ]);
  }

  public function sbperro_presentaciones()
  {
    $matchThese = ['cachorro','adulto','razapequeña','senior'];
    $ContentList = Content::where('page', 'smartbitesperro')
    ->whereIn('section',  $matchThese)
    ->get();
    //dd($ContentList);
    return view($this->f.'presentaciones', [
      'Contenidos' => $ContentList,
    ]);
  }

  /**
  *
  * EDITING FUNCTIONS
  *
  */

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
         return redirect()->route('smartbites.banners');
         break;
       case 'smartbitesgato':
         return redirect()->route('smartbitesgato.banners');
         break;

       default:
         // code...
         break;
     }

   }

  public function UpdateProdBannerTxt(Request $request)
  {
    $messages = [
    'required' => 'El campo :attribute es obligatorio.',
    ];
    $this->validate(request(), [
      'page' => 'required',
      'type' => 'required',
      'section' => 'required',
      'parrafo1' => 'required',
      'parrafo2' => 'required',
     ], $messages);
     //dd($request->all());
     switch ($request->page) {
       case 'smartbites':{
         $Parrafo1 = Content::where('page', 'smartbitesperro')->where('section', 'banner')->where('field', 'leyend1')->first();
         $Parrafo2 = Content::where('page', 'smartbitesperro')->where('section', 'banner')->where('field', 'leyend2')->first();
         $Parrafo1->value = $request->parrafo1;
         $Parrafo1->save();
         $Parrafo2->value = $request->parrafo2;
         $Parrafo2->save();
         return redirect()->route('smartbites.banners');
         break;
       }
       case 'smartbitesgato':{
         $Parrafo1 = Content::where('page', 'smartbitesgato')->where('section', 'banner')->where('field', 'leyend1')->first();
         $Parrafo2 = Content::where('page', 'smartbitesgato')->where('section', 'banner')->where('field', 'leyend2')->first();
         $Parrafo1->value = $request->parrafo1;
         $Parrafo1->save();
         $Parrafo2->value = $request->parrafo2;
         $Parrafo2->save();
         return redirect()->route('smartbitesgato.banners');
         break;
       }
       case 'titan':{
         $Parrafo1 = Content::where('page', 'titan')->where('section', 'banner')->where('field', 'leyend1')->first();
         $Parrafo2 = Content::where('page', 'titan')->where('section', 'banner')->where('field', 'leyend2')->first();
         $Parrafo1->value = $request->parrafo1;
         $Parrafo1->save();
         $Parrafo2->value = $request->parrafo2;
         $Parrafo2->save();
         return redirect()->route('titan.banners');
         break;
       }
       case 'rocko':{
         $Parrafo1 = Content::where('page', 'rocko')->where('section', 'banner')->where('field', 'leyend1')->first();
         $Parrafo2 = Content::where('page', 'rocko')->where('section', 'banner')->where('field', 'leyend2')->first();
         $Parrafo1->value = $request->parrafo1;
         $Parrafo1->save();
         $Parrafo2->value = $request->parrafo2;
         $Parrafo2->save();
         return redirect()->route('rocko.banners');
         break;
       }

       default:
         // code...
         break;
     }
     dd($request->all());
  }

  public function EditPresentationContent(Request $request)
  {
    $messages = [
    'required' => 'El campo :attribute es obligatorio.',
    ];
    $this->validate(request(), [
      'page' => 'required',
      'section' => 'required',
      'area1' => 'required',
      'area2' => 'required',
      'edades' => 'required',
      'presentaciones' => 'required',
      'imagefile' => 'nullable|image',
     ], $messages);
    //dd($request->all());
    $Edades = Content::where([['page', '=', $request->page],['section', '=', $request->section],['field', '=', $request->area1]])->first();
    $Presentaciones = Content::where([['page', '=', $request->page],['section', '=', $request->section],['field', '=', $request->area2]])->first();
    //dd($Edades);
    $Edades->value = $request->edades;
    $Edades->save();
    $Presentaciones->value = $request->presentaciones;
    $Presentaciones->save();
    if(isset($request->imagefile)){
      $Helper = new Helper();
      $Helper->UpdatePresentacionImage($request->page,$request->section,$_FILES['imagefile'],$request->imgname);
    }


    switch ($request->page) {
      case 'smartbitesperro':
        return redirect()->route('smartbites.presentaciones');
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
