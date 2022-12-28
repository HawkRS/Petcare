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
       case 'titan':
         return redirect()->route('titan.banners');
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
     //dd($request->all());
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
      'imagefile2' => 'nullable|image',
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
      if($request->page == 'titan'){$Helper->UpdatePresentacionImage($request->page,$request->section.'izq',$_FILES['imagefile'],$request->imgname);}
      else{$Helper->UpdatePresentacionImage($request->page,$request->section,$_FILES['imagefile'],$request->imgname);}
    }
    if(isset($request->imagefile2)){
      $Helper = new Helper();
      $Helper->UpdatePresentacionImage($request->page,$request->section.'der',$_FILES['imagefile2'],$request->imgname);
    }


    switch ($request->page) {
      case 'smartbitesperro':
        return redirect()->route('smartbites.presentaciones');
        break;
      case 'smartbitesgato':
        return redirect()->route('smartbitesgato.presentaciones');
        break;
      case 'titan':
        return redirect()->route('titan.presentaciones');
        break;
      case 'rocko':
        return redirect()->route('rocko.presentaciones');
        break;

      default:
        // code...
        break;
    }

  }

  public function EditBenefitsContent(Request $request, $section)
  {
    //dd($request->all());
    $messages = [
    'required' => 'El campo :attribute es obligatorio.',
    ];
    $this->validate(request(), [
      'page' => 'required',
      'section' => 'required',
      'area' => 'required',
      'beneficiostitulo' => 'required',
      'beneficios' => 'required',
      'imagefile' => 'nullable|image',
    ], $messages);

    $fieldtitle = $section.$request->area.'titulo';
    $field = $section.$request->area;
    //dd($field);

    $Beneficiosttl = Content::where([['page', '=', $request->page],['section', '=', $request->section],['field', '=', $fieldtitle]])->first();
    $Beneficios = Content::where([['page', '=', $request->page],['section', '=', $request->section],['field', '=', $field]])->first();

    //dd($Beneficios);
    $Beneficiosttl->value = $request->beneficiostitulo; $Beneficiosttl->save();
    $Beneficios->value = $request->beneficios; $Beneficios->save();
    if(isset($request->imagefile)){
      $Helper = new Helper();
      $path = $Helper->BeneficiosImageName($field, $_FILES['imagefile'],$request->page);
    }


    switch ($request->page) {
      case 'smartbitesperro':
        return redirect()->route('smartbites.beneficios');
        break;
      case 'smartbitesgato':
        return redirect()->route('smartbitesgato.beneficios');
        break;
      case 'titan':
        return redirect()->route('titan.beneficios');
        break;

      default:
        // code...
        break;
    }
  }



}
