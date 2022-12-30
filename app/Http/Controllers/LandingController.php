<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use App\Content;
use App\Helper;
use Illuminate\Support\Facades\DB;

class LandingController extends Controller
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

  private $f = 'landing.';

  /**
   * Show the application sliders page settings.
   *
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function index()
  {
      $ContentList = Content::where('page', 'landing')->get();
      //$ContentList = DB::table('content')
      //          ->whereDate('page', 'sliders')
      //          ->get();
      //dd($ContentList[0]);
      //dd(public_path('something'));
      return view($this->f.'index', [
        'Contenidos' => $ContentList,
      ]);
  }

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function EditSlider(Request $request, $id)
  {
    //dd($request->all());
    $slidernum = 0;
    $messages = [
    'required' => 'El campo :attribute es obligatorio.',
    ];
    $this->validate(request(), [
      'position' => 'required',
      'titulo' => 'required',
      'leyenda' => 'required',
      'banner_desk' => 'nullable|image',
      'banner_1200' => 'nullable|image',
      'banner_992' => 'nullable|image',
      'banner_768' => 'nullable|image',
      'banner_576' => 'nullable|image',
     ], $messages);
     switch ($request->position) {
       case 'slider1':
         $idtitulo=1; $idleyenda=2;  $slidernum = 1;
         break;
       case 'slider2':
        $idtitulo=3;$idleyenda=4; $slidernum = 2;
         break;
       case 'slider3':
        $idtitulo=5;$idleyenda=6; $slidernum = 3;
         break;

       default:
         // code...
         break;
     }
       $EditedTitulo = Content::findorfail($idtitulo);
       $EditedTitulo->value = $request->titulo;
       $EditedTitulo->save();
       $EditedLeyenda = Content::findorfail($idleyenda);
       $EditedLeyenda->value = $request->leyenda;
       $EditedLeyenda->save();

     $Sliders= array(
       "sliderdesk" => "banner".$slidernum."_desk",
       "slider1200" => "banner".$slidernum."_1200",
       "slider992" => "banner".$slidernum."_992",
       "slider768" => "banner".$slidernum."_768",
       "slider576" => "banner".$slidernum."_576",
     );
     //dd($EditedTitulo);



     //dd($Img);
     if ($_FILES['banner_desk']['size'] != 0 && $_FILES['banner_desk']['error'] == 0){$ImgDesk = $_FILES['banner_desk'];   $this->BannerChanger($Sliders['sliderdesk'],$ImgDesk );}
     if ($_FILES['banner_1200']['size'] != 0 && $_FILES['banner_1200']['error'] == 0){$Img_1200 = $_FILES['banner_1200'];   $this->BannerChanger($Sliders['slider1200'],$Img_1200 );}
     if ($_FILES['banner_992']['size'] != 0 && $_FILES['banner_992']['error'] == 0){$Img_992 = $_FILES['banner_992'];   $this->BannerChanger($Sliders['slider992'],$Img_992 );}
     if ($_FILES['banner_768']['size'] != 0 && $_FILES['banner_768']['error'] == 0){$Img_768 = $_FILES['banner_768'];   $this->BannerChanger($Sliders['slider768'],$Img_768 );}
     if ($_FILES['banner_576']['size'] != 0 && $_FILES['banner_576']['error'] == 0){$Img_576 = $_FILES['banner_576'];   $this->BannerChanger($Sliders['slider576'],$Img_576 );}

      return redirect()->route('landing.page');
  }


  public function BannerChanger($BannerName, $BannerImg)
  {
    $intervention = new ImageManager(array('driver' => 'gd'));
    $img = $intervention->make($BannerImg['tmp_name']);
    $webpimg = $intervention->make($BannerImg['tmp_name'])->encode('webp', 90);
    $thumbnail = $intervention->make($BannerImg['tmp_name']);
    $thumbnail->fit(300, 300);
    switch ($BannerName) {
      case 'banner1_desk':  case 'banner2_desk':  case 'banner3_desk':
        {
          if($BannerName == 'banner1_desk'){
            $img->save('img/sliders/banner-home-1-desktop.jpg');
            $webpimg->save('img/sliders/banner-home-1-desktop.webp');
            $thumbnail->save('img/sliders/thumbs/banner-home-1-desktop.jpg');
          }
          elseif ($BannerName == 'banner2_desk'){
            $img->save('img/sliders/banner-home-2-desktop.jpg');
            $webpimg->save('img/sliders/banner-home-2-desktop.webp');
            $thumbnail->save('img/sliders/thumbs/banner-home-2-desktop.jpg');
          }
          elseif ($BannerName == 'banner3_desk'){
            $img->save('img/sliders/banner-home-3-desktop.jpg');
            $webpimg->save('img/sliders/banner-home-3-desktop.webp');
            $thumbnail->save('img/sliders/thumbs/banner-home-3-desktop.jpg');
          }
        }
        break;
      case 'banner1_1200':  case 'banner2_1200':  case 'banner3_1200':
        {
          if($BannerName == 'banner1_1200'){
            $img->save('img/sliders/banner-home-1-1200.jpg');
            $webpimg->save('img/sliders/banner-home-1-1200.webp');
            $thumbnail->save('img/sliders/thumbs/banner-home-1-1200.jpg');
          }
          elseif ($BannerName == 'banner2_1200'){
            $img->save('img/sliders/banner-home-2-1200.jpg');
            $webpimg->save('img/sliders/banner-home-2-1200.webp');
            $thumbnail->save('img/sliders/thumbs/banner-home-2-1200.jpg');
          }
          elseif ($BannerName == 'banner3_1200'){
            $img->save('img/sliders/banner-home-3-1200.jpg');
            $webpimg->save('img/sliders/banner-home-3-1200.webp');
            $thumbnail->save('img/sliders/thumbs/banner-home-3-1200.jpg');
          }
        }
        break;
      case 'banner1_992':  case 'banner2_992':  case 'banner3_992':
        {
          if($BannerName == 'banner1_992'){
            $img->save('img/sliders/banner-home-1-992.jpg');
            $webpimg->save('img/sliders/banner-home-1-992.webp');
            $thumbnail->save('img/sliders/thumbs/banner-home-1-992.jpg');
          }
          elseif ($BannerName == 'banner2_992'){
            $img->save('img/sliders/banner-home-2-992.jpg');
            $webpimg->save('img/sliders/banner-home-2-992.webp');
            $thumbnail->save('img/sliders/thumbs/banner-home-2-992.jpg');
          }
          elseif ($BannerName == 'banner3_992'){
            $img->save('img/sliders/banner-home-3-992.jpg');
            $webpimg->save('img/sliders/banner-home-3-992.webp');
            $thumbnail->save('img/sliders/thumbs/banner-home-3-992.jpg');
          }
        }
        break;
      case 'banner1_768':  case 'banner2_768':  case 'banner3_768':
        {
          if($BannerName == 'banner1_768'){
            $img->save('img/sliders/banner-home-1-768.jpg');
            $webpimg->save('img/sliders/banner-home-1-768.webp');
            $thumbnail->save('img/sliders/thumbs/banner-home-1-768.jpg');
          }
          elseif ($BannerName == 'banner2_768'){
            $img->save('img/sliders/banner-home-2-768.jpg');
            $webpimg->save('img/sliders/banner-home-2-768.webp');
            $thumbnail->save('img/sliders/thumbs/banner-home-2-768.jpg');
          }
          elseif ($BannerName == 'banner3_768'){
            $img->save('img/sliders/banner-home-3-768.jpg');
            $webpimg->save('img/sliders/banner-home-3-768.webp');
            $thumbnail->save('img/sliders/thumbs/banner-home-3-768.jpg');
          }
        }
        break;
      case 'banner1_576':  case 'banner2_576':  case 'banner3_576':
        {
          if($BannerName == 'banner1_576'){
            $img->save('img/sliders/banner-home-1-576.jpg');
            $webpimg->save('img/sliders/banner-home-1-576.webp');
            $thumbnail->save('img/sliders/thumbs/banner-home-1-576.jpg');
          }
          elseif ($BannerName == 'banner2_576'){
            $img->save('img/sliders/banner-home-2-576.jpg');
            $webpimg->save('img/sliders/banner-home-2-576.webp');
            $thumbnail->save('img/sliders/thumbs/banner-home-2-576.jpg');
          }
          elseif ($BannerName == 'banner3_576'){
            $img->save('img/sliders/banner-home-3-576.jpg');
            $webpimg->save('img/sliders/banner-home-3-576.webp');
            $thumbnail->save('img/sliders/thumbs/banner-home-3-576.jpg');
          }
        }
        break;

      default:
        // code...
        break;
    }


  }

  public function UpdateContent(Request $request)
  {
    //dd($request->all());
    $messages = [
    'required' => 'El campo :attribute es obligatorio.',
    ];
    $this->validate(request(), [
      'page' => 'required',
      'position' => 'required',
      'descripcion' => 'required',
      'imgizq' => 'nullable|image',
      'imgder' => 'nullable|image',
      'imgmobil' => 'nullable|image',
      'imgtitanperroizq' => 'nullable|image',
      'imgtitanperroder' => 'nullable|image',
      'imgtitangatoizq' => 'nullable|image',
      'imgtitangatoder' => 'nullable|image',
      'imgrockoIzqExt' => 'nullable|image',
      'imgrockoIzqInt' => 'nullable|image',
      'imgrockoDerInt' => 'nullable|image',
      'imgrockoDerExt' => 'nullable|image',
     ], $messages);
     $Helper = new Helper();
     $ContentId = $Helper->PageSorter($request->page, $request->position);
     $EditedContent = Content::findorfail($ContentId);
     $EditedContent->value = $request->descripcion;
     $EditedContent->save();
     if(isset($_FILES['imgizq'])){if ($_FILES['imgizq']['size'] != 0 && $_FILES['imgizq']['error'] == 0){$ImgIzq = $_FILES['imgizq'];   $this->ImageContent($request->position, 'imgizq',$ImgIzq );}}
     if(isset($_FILES['imgder'])){if ($_FILES['imgder']['size'] != 0 && $_FILES['imgder']['error'] == 0){$ImgDer = $_FILES['imgder'];   $this->ImageContent($request->position, 'imgder',$ImgDer );}}
     if(isset($_FILES['imgmobil'])){if ($_FILES['imgmobil']['size'] != 0 && $_FILES['imgmobil']['error'] == 0){$ImgMobil = $_FILES['imgmobil'];   $this->ImageContent($request->position, 'imgmobil',$ImgMobil );}}

     if(isset($_FILES['imgtitanperroizq'])){if ($_FILES['imgtitanperroizq']['size'] != 0 && $_FILES['imgtitanperroizq']['error'] == 0){$ImgTitanPerroIzq = $_FILES['imgtitanperroizq'];   $this->ImageContent($request->position, 'imgtitanperroizq',$ImgTitanPerroIzq );}}
     if(isset($_FILES['imgtitanperroder'])){if ($_FILES['imgtitanperroder']['size'] != 0 && $_FILES['imgtitanperroder']['error'] == 0){$ImgTitanPerroDer = $_FILES['imgtitanperroder'];   $this->ImageContent($request->position, 'imgtitanperroder',$ImgTitanPerroDer );}}
     if(isset($_FILES['imgtitangatoizq'])){if ($_FILES['imgtitangatoizq']['size'] != 0 && $_FILES['imgtitangatoizq']['error'] == 0){$ImgTitanGatoIzq = $_FILES['imgtitangatoizq'];   $this->ImageContent($request->position, 'imgtitangatoizq',$ImgTitanGatoIzq );}}
     if(isset($_FILES['imgtitangatoder'])){if ($_FILES['imgtitangatoder']['size'] != 0 && $_FILES['imgtitangatoder']['error'] == 0){$ImgTitanGatoDer = $_FILES['imgtitangatoder'];   $this->ImageContent($request->position, 'imgtitangatoder',$ImgTitanGatoDer );}}

     if(isset($_FILES['imgrockoIzqExt'])){if ($_FILES['imgrockoIzqExt']['size'] != 0 && $_FILES['imgrockoIzqExt']['error'] == 0){$ImgRockoIzqExt = $_FILES['imgrockoIzqExt'];   $this->ImageContent($request->position, 'imgrockoIzqExt',$ImgRockoIzqExt );}}
     if(isset($_FILES['imgrockoIzqInt'])){if ($_FILES['imgrockoIzqInt']['size'] != 0 && $_FILES['imgrockoIzqInt']['error'] == 0){$ImgRockoIzqInt = $_FILES['imgrockoIzqInt'];   $this->ImageContent($request->position, 'imgrockoIzqInt',$ImgRockoIzqInt );}}
     if(isset($_FILES['imgrockoDerInt'])){if ($_FILES['imgrockoDerInt']['size'] != 0 && $_FILES['imgrockoDerInt']['error'] == 0){$ImgRockoDerInt = $_FILES['imgrockoDerInt'];   $this->ImageContent($request->position, 'imgrockoDerInt',$ImgRockoDerInt );}}
     if(isset($_FILES['imgrockoDerExt'])){if ($_FILES['imgrockoDerExt']['size'] != 0 && $_FILES['imgrockoDerExt']['error'] == 0){$ImgRockoDerExt = $_FILES['imgrockoDerExt'];   $this->ImageContent($request->position, 'imgrockoDerExt',$ImgRockoDerExt );}}

     //dd($request->all());


     return redirect()->route('landing.page');
  }

  public function ImageContent($position, $area, $ImageCont)
  {
    //dd($area);
    switch ($position) {
      case 'smartbites':
        if($area == 'imgizq'){$path = "img/home/productos/smart_bites_neuro_active_adulto.png";$webppath = "img/home/productos/smart_bites_neuro_active_adulto.webp";  $thumbpath ="img/home/productos/thumbs/smart_bites_neuro_active_adulto.png"; }
        if($area == 'imgder'){$path = "img/home/productos/perro-smart-bites.png";$webppath = "img/home/productos/perro-smart-bites.webp";  $thumbpath ="img/home/productos/thumbs/perro-smart-bites.png"; }
        if($area == 'imgmobil'){$path = "img/home/productos/composite_smartbites.jpg";$webppath = "img/home/productos/composite_smartbites.webp";  $thumbpath ="img/home/productos/thumbs/composite_smartbites.jpg"; }
        break;
      case 'titan':
        if($area == 'imgtitanperroizq'){$path = "img/home/productos/titan-perro.png";$webppath = "img/home/productos/titan-perro.webp";  $thumbpath ="img/home/productos/thumbs/titan-perro.png"; }
        if($area == 'imgtitanperroder'){$path = "img/home/productos/perro-titan.png";$webppath = "img/home/productos/perro-titan.webp";  $thumbpath ="img/home/productos/thumbs/perro-titan.png"; }
        if($area == 'imgtitangatoizq'){$path = "img/home/productos/gato-titan.png";$webppath = "img/home/productos/gato-titan.webp";  $thumbpath ="img/home/productos/thumbs/gato-titan.png"; }
        if($area == 'imgtitangatoder'){$path = "img/home/productos/titan-gato.png";$webppath = "img/home/productos/titan-gato.webp";  $thumbpath ="img/home/productos/thumbs/titan-gato.png"; }
        break;
      case 'rocko':
        if($area == 'imgrockoIzqExt'){$path = "img/home/productos/perro-rocko.png";$webppath = "img/home/productos/perro-rocko.webp";  $thumbpath ="img/home/productos/thumbs/perro-rocko.png"; }
        if($area == 'imgrockoIzqInt'){$path = "img/home/productos/rocko-plus-complete.png";$webppath = "img/home/productos/rocko-plus-complete.webp";  $thumbpath ="img/home/productos/thumbs/rocko-plus-complete.png"; }
        if($area == 'imgrockoDerInt'){$path = "img/home/productos/rocko-perro.png";$webppath = "img/home/productos/rocko-perro.webp";  $thumbpath ="img/home/productos/thumbs/rocko-perro.png"; }
        if($area == 'imgrockoDerExt'){$path = "img/home/productos/perro-rocko-cafe.png";$webppath = "img/home/productos/perro-rocko-cafe.webp";  $thumbpath ="img/home/productos/thumbs/perro-rocko-cafe.png"; }
        break;

      default:
        // code...
        break;
    }
    //dd($path);
    $intervention = new ImageManager(array('driver' => 'gd'));
    $img = $intervention->make($ImageCont['tmp_name']);
    $imgwebp = $intervention->make($ImageCont['tmp_name'])->encode('webp', 90);
    $thumbnail = $intervention->make($ImageCont['tmp_name']);
    $thumbnail->fit(300, 300);
    $img->save($path);
    $imgwebp->save($path);
    $thumbnail->save($thumbpath);
  }

}
