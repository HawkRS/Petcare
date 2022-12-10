<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManager;

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
      return view($this->f.'index');
  }

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function storeSlider(Request $request)
  {
    $messages = [
    'required' => 'El campo :attribute es obligatorio.',
    ];
    $this->validate(request(), [
      'bannertype' => 'required',
      'titulo' => 'required',
      'leyenda' => 'required',
      'banner1_desk' => 'nullable|image',
      'banner1_1200' => 'nullable|image',
      'banner1_992' => 'nullable|image',
      'banner1_768' => 'nullable|image',
      'banner1_576' => 'nullable|image',
     ], $messages);


     //dd($_FILES['banner1_desk']);
     $Img = $_FILES['banner1_desk'];
     //dd($Img);
     if ($_FILES['banner1_desk']['size'] != 0 && $_FILES['banner1_desk']['error'] == 0){   $this->BannerChanger('banner1_desk',$Img );}

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
