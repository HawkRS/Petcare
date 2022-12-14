<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use App\Content;
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
   * Show the application dashboard.
   *
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function index()
  {
      //$ContentList = Content::where('page', 'landing')->get();
      $ContentList = DB::table('content')
                ->whereDate('page', 'landing')
                ->get();
      //dd($ContentList[0]);
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
         $idtitulo=1;
         $idleyenda=2;
         $slidernum = 1;
         break;
       case 'slider2':
        $idtitulo=3;
        $idleyenda=4;
        $slidernum = 2;
         break;
       case 'slider3':
        $idtitulo=5;
        $idleyenda=6;
        $slidernum = 3;
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
    $thumbnail = $intervention->make($BannerImg['tmp_name']);
    $thumbnail->fit(300, 300);
    switch ($BannerName) {
      case 'banner1_desk':  case 'banner2_desk':  case 'banner3_desk':
        {
          if($BannerName == 'banner1_desk'){
            $img->save('img/landing/banner-home-1-desktop.jpg');
            $thumbnail->save('img/landing/thumbs/banner-home-1-desktop.jpg');
          }
          elseif ($BannerName == 'banner2_desk'){
            $img->save('img/landing/banner-home-2-desktop.jpg');
            $thumbnail->save('img/landing/thumbs/banner-home-2-desktop.jpg');
          }
          elseif ($BannerName == 'banner3_desk'){
            $img->save('img/landing/banner-home-3-desktop.jpg');
            $thumbnail->save('img/landing/thumbs/banner-home-3-desktop.jpg');
          }
        }
        break;
      case 'banner1_1200':  case 'banner2_1200':  case 'banner3_1200':
        {
          if($BannerName == 'banner1_1200'){
            $img->save('img/landing/banner-home-1-1200.jpg');
            $thumbnail->save('img/landing/thumbs/banner-home-1-1200.jpg');
          }
          elseif ($BannerName == 'banner2_1200'){
            $img->save('img/landing/banner-home-2-1200.jpg');
            $thumbnail->save('img/landing/thumbs/banner-home-2-1200.jpg');
          }
          elseif ($BannerName == 'banner3_1200'){
            $img->save('img/landing/banner-home-3-1200.jpg');
            $thumbnail->save('img/landing/thumbs/banner-home-3-1200.jpg');
          }
        }
        break;
      case 'banner1_992':  case 'banner2_992':  case 'banner3_992':
        {
          if($BannerName == 'banner1_992'){
            $img->save('img/landing/banner-home-1-992.jpg');
            $thumbnail->save('img/landing/thumbs/banner-home-1-992.jpg');
          }
          elseif ($BannerName == 'banner2_992'){
            $img->save('img/landing/banner-home-2-992.jpg');
            $thumbnail->save('img/landing/thumbs/banner-home-2-992.jpg');
          }
          elseif ($BannerName == 'banner3_992'){
            $img->save('img/landing/banner-home-3-992.jpg');
            $thumbnail->save('img/landing/thumbs/banner-home-3-992.jpg');
          }
        }
        break;
      case 'banner1_768':  case 'banner2_768':  case 'banner3_768':
        {
          if($BannerName == 'banner1_768'){
            $img->save('img/landing/banner-home-1-768.jpg');
            $thumbnail->save('img/landing/thumbs/banner-home-1-768.jpg');
          }
          elseif ($BannerName == 'banner2_768'){
            $img->save('img/landing/banner-home-2-768.jpg');
            $thumbnail->save('img/landing/thumbs/banner-home-2-768.jpg');
          }
          elseif ($BannerName == 'banner3_768'){
            $img->save('img/landing/banner-home-3-768.jpg');
            $thumbnail->save('img/landing/thumbs/banner-home-3-768.jpg');
          }
        }
        break;
      case 'banner1_576':  case 'banner2_576':  case 'banner3_576':
        {
          if($BannerName == 'banner1_576'){
            $img->save('img/landing/banner-home-1-576.jpg');
            $thumbnail->save('img/landing/thumbs/banner-home-1-576.jpg');
          }
          elseif ($BannerName == 'banner2_576'){
            $img->save('img/landing/banner-home-2-576.jpg');
            $thumbnail->save('img/landing/thumbs/banner-home-2-576.jpg');
          }
          elseif ($BannerName == 'banner3_576'){
            $img->save('img/landing/banner-home-3-576.jpg');
            $thumbnail->save('img/landing/thumbs/banner-home-3-576.jpg');
          }
        }
        break;

      default:
        // code...
        break;
    }


  }
}
