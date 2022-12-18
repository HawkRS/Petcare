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
  public function smartbitesperro()
  {
    //dd('index smartbites');
      //$ContentList = Content::where('page', 'landing')->get();
      $ContentList = DB::table('content')
                ->where('page', 'smartbitesperro')
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
      'section' => 'required',
      'descripcion' => 'required',
      'imgname' => 'nullable',
      'imagefile' => 'nullable|image',
     ], $messages);
     $Helper = new Helper();
    //dd($request->imgname);
     if($request->type == 'image'){
       $Helper->UpdateImage($request->page,$request->section,$_FILES['imagefile'],$request->imgname);
     }
     elseif($request->type == 'text') {
       // code...
     }

     switch ($request->page) {
       case 'smartbites':
         return redirect()->route('smartbites.page');
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
      switch ($request->page) {
        case 'smartbites':{
          $Parrafo1 = Content::where('page', 'smartbitesperro')->where('section', 'banner')->where('field', 'leyend1')->first();
          $Parrafo2 = Content::where('page', 'smartbitesperro')->where('section', 'banner')->where('field', 'leyend2')->first();
          $Parrafo1->value = $request->parrafo1;
          $Parrafo1->save();
          $Parrafo2->value = $request->parrafo2;
          $Parrafo2->save();
          return redirect()->route('smartbites.page');
          break;
        }
        case 'smartbitesgatos':{
          $Parrafo1 = Content::where('page', 'smartbitesgato')->where('section', 'banner')->where('field', 'leyend1')->first();
          $Parrafo2 = Content::where('page', 'smartbitesgato')->where('section', 'banner')->where('field', 'leyend2')->first();
          $Parrafo1->value = $request->parrafo1;
          $Parrafo1->save();
          $Parrafo2->value = $request->parrafo2;
          $Parrafo2->save();
          return redirect()->route('smartbites.page');
          break;
        }
        case 'titan':{
          $Parrafo1 = Content::where('page', 'titan')->where('section', 'banner')->where('field', 'leyend1')->first();
          $Parrafo2 = Content::where('page', 'titan')->where('section', 'banner')->where('field', 'leyend2')->first();
          $Parrafo1->value = $request->parrafo1;
          $Parrafo1->save();
          $Parrafo2->value = $request->parrafo2;
          $Parrafo2->save();
          return redirect()->route('smartbites.page');
          break;
        }
        case 'rocko':{
          $Parrafo1 = Content::where('page', 'rocko')->where('section', 'banner')->where('field', 'leyend1')->first();
          $Parrafo2 = Content::where('page', 'rocko')->where('section', 'banner')->where('field', 'leyend2')->first();
          $Parrafo1->value = $request->parrafo1;
          $Parrafo1->save();
          $Parrafo2->value = $request->parrafo2;
          $Parrafo2->save();
          return redirect()->route('smartbites.page');
          break;
        }

        default:
          // code...
          break;
      }
      dd($request->all());
   }


}
