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
     dd($request->all());
     $Edades = Content::where([['page', '=', $request->page],['section', '=', $request->section],['field', '=', $request->area1]])->first();
     $Presentaciones = Content::where([['page', '=', $request->page],['section', '=', $request->section],['field', '=', $request->area2]])->first();
     //dd($Edades);
     $Edades->value = $request->edades;
     $Edades->save();
     $Presentaciones->value = $request->presentaciones;
     $Presentaciones->save();
     $Helper = new Helper();
     $Helper->UpdatePresentacionImage($request->page,$request->section,$_FILES['imagefile'],$request->imgname);


     return redirect()->route('smartbites.page');

   }

   public function EditBenefitsContent(Request $request)
   {
     $messages = [
     'required' => 'El campo :attribute es obligatorio.',
     ];
     $this->validate(request(), [
       'page' => 'required',
       'section' => 'required',
       'area' => 'required',
       'beneficiostitulo1' => 'required',
       'beneficios1' => 'required',
       'beneficiostitulo2' => 'required',
       'beneficios2' => 'required',
       'beneficiostitulo3' => 'required',
       'beneficios3' => 'required',
       'beneficiostitulo4' => 'required',
       'beneficios4' => 'required',
     ], $messages);
     switch ($request->area) {
       case 'cachorro':
         $area = array(
           'cachorrotopizqtitulo',
           'cachorrotopizq',
           'cachorrotopdertitulo',
           'cachorrotopder',
           'cachorrobottomizqtitulo',
           'cachorrobottomizq',
           'cachorrobottomdertitulo',
           'cachorrobottomder',
         );
         break;
       case 'razapequeña':
         $area = array(
           'pequeñostopizqtitulo',
           'pequeñostopizq',
           'pequeñostopdertitulo',
           'pequeñostopder',
           'pequeñosbottomizqtitulo',
           'pequeñosbottomizq',
           'pequeñosbottomdertitulo',
           'pequeñosbottomder',
         );
         break;
       case 'adulto':
         $area = array(
           'adultotopizqtitulo',
           'adultotopizq',
           'adultotopdertitulo',
           'adultotopder',
           'adultobottomizqtitulo',
           'adultobottomizq',
           'adultobottomdertitulo',
           'adultobottomder',
         );
         break;
       case 'senior':
         $area = array(
           'seniortopizqtitulo',
           'seniortopizq',
           'seniortopdertitulo',
           'seniortopder',
           'seniorbottomizqtitulo',
           'seniorbottomizq',
           'seniorbottomdertitulo',
           'seniorbottomder',
         );
         break;

       default:
         // code...
         break;
     }
     //dd($Beneficios1);
     $Beneficios1ttl = Content::where([['page', '=', $request->page],['section', '=', $request->section],['field', '=', $area[0]]])->first();
     $Beneficios1 = Content::where([['page', '=', $request->page],['section', '=', $request->section],['field', '=', $area[1]]])->first();
     $Beneficios2ttl = Content::where([['page', '=', $request->page],['section', '=', $request->section],['field', '=', $area[2]]])->first();
     $Beneficios2 = Content::where([['page', '=', $request->page],['section', '=', $request->section],['field', '=', $area[3]]])->first();
     $Beneficios3ttl = Content::where([['page', '=', $request->page],['section', '=', $request->section],['field', '=', $area[4]]])->first();
     $Beneficios3 = Content::where([['page', '=', $request->page],['section', '=', $request->section],['field', '=', $area[5]]])->first();
     $Beneficios4ttl = Content::where([['page', '=', $request->page],['section', '=', $request->section],['field', '=', $area[6]]])->first();
     $Beneficios4 = Content::where([['page', '=', $request->page],['section', '=', $request->section],['field', '=', $area[7]]])->first();

     $Beneficios1ttl->value = $request->beneficiostitulo1; $Beneficios1ttl->save();
     $Beneficios1->value = $request->beneficios1; $Beneficios1->save();
     $Beneficios2ttl->value = $request->beneficiostitulo2; $Beneficios2ttl->save();
     $Beneficios2->value = $request->beneficios2; $Beneficios2->save();
     $Beneficios3ttl->value = $request->beneficiostitulo3; $Beneficios3ttl->save();
     $Beneficios3->value = $request->beneficios3; $Beneficios3->save();
     $Beneficios4ttl->value = $request->beneficiostitulo4; $Beneficios4ttl->save();
     $Beneficios4->value = $request->beneficios4; $Beneficios4->save();

      return redirect()->route('smartbites.page');
   }


}
