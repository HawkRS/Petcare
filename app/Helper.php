<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Intervention\Image\ImageManager;
use App\Content;

class Helper extends Model
{
    public function PageSorter($page, $section)
    {
      switch ($page) {
        case 'landing':
          $res = $this->LandingSortingSection($section);
          return $res;
          dd('landing');
          break;
        case 'smartbitesdogs':
          $res = $this->SmartBitesPerroSortingSection($section);
          return $res;
          dd('smartbitesdogs');
          break;
        case 'smartbitescat':
          $res = $this->ProductosSortingSection($section);
          return $res;
          dd('smartbitescat');
          break;
        case 'titan':
          $res = $this->ProductosSortingSection($section);
          return $res;
          dd('titan');
          break;
        case 'rocko':
          $res = $this->ProductosSortingSection($section);
          return $res;
          dd('rocko');
          break;

        default:
          dd('error');
          break;
      }
    }

    public function LandingSortingSection($section)
    {
      switch ($section) {
        case 'smartbites':
          return 7;
          break;
        case 'titan':
          return 8;
          break;
        case 'rocko':
          return 9;
          break;

        default:
          // code...
          break;
      }
    }
    public function SmartBitesPerroSortingSection($section)
    {
      switch ($section) {
        case 'banner':
          return 7;
          break;
        case 'titan':
          return 8;
          break;
        case 'rocko':
          return 9;
          break;

        default:
          // code...
          break;
      }
    }


    public function UpdateImage($page, $section, $ImageCont, $imgarea)
    {
      //dd($imgarea);
      //if ($_FILES['imgtitanperroizq']['size'] != 0 && $_FILES['imgtitanperroizq']['error'] == 0){$ImgTitanPerroIzq = $_FILES['imgtitanperroizq'];   $this->ImageContent($request->position, 'imgtitanperroizq',$ImgTitanPerroIzq );}
      if ($ImageCont['size'] != 0 && $ImageCont['error'] == 0){
        switch ($page) {
          case 'smartbites':{
            if ($section == 'banner') {
              if($imgarea == 'izqext'){$path = "img/productos/smart-bites/smart-bites-neuro-active-senior.png"; $thumbpath ="img/productos/smart-bites/thumbs/smart-bites-neuro-active-senior.png"; }
              if($imgarea == 'izqint'){$path = "img/productos/smart-bites/inicio_smart_perro.png"; $thumbpath ="img/productos/smart-bites/thumbs/inicio_smart_perro.png"; }
              if($imgarea == 'derint'){$path = "img/productos/smart-bites/smart-bites-neuro-active-adulto.png"; $thumbpath ="img/productos/smart-bites/thumbs/smart-bites-neuro-active-adulto.png"; }
              if($imgarea == 'derext'){$path = "img/productos/smart-bites/smart-bites-neuro-active-cachorro.png"; $thumbpath ="img/productos/smart-bites/thumbs/smart-bites-neuro-active-cachorro.png"; }
            }
          }
            break;

          default:
            // code...
            break;
        }

        $intervention = new ImageManager(array('driver' => 'gd'));
        $img = $intervention->make($ImageCont['tmp_name']);
        $thumbnail = $intervention->make($ImageCont['tmp_name']);
        $thumbnail->fit(300, 300);
        $img->save($path);
        $thumbnail->save($thumbpath);
      }
    }

    public function ImageContent($position, $area, $ImageCont)
    {

      switch ($position) {
        case 'smartbites':
          if($area == 'imgizq'){$path = "img/home/productos/smart_bites_neuro_active_adulto.png"; $thumbpath ="img/home/productos/thumbs/smart_bites_neuro_active_adulto.png"; }
          if($area == 'imgder'){$path = "img/home/productos/perro-smart-bites.png"; $thumbpath ="img/home/productos/thumbs/perro-smart-bites.png"; }
          if($area == 'imgmobil'){$path = "img/home/productos/composite_smartbites.jpg"; $thumbpath ="img/home/productos/thumbs/composite_smartbites.jpg"; }
          break;
        case 'titan':
          if($area == 'imgtitanperroizq'){$path = "img/home/productos/titan-perro.png"; $thumbpath ="img/home/productos/thumbs/titan-perro.png"; }
          if($area == 'imgtitanperroder'){$path = "img/home/productos/perro-titan.png"; $thumbpath ="img/home/productos/thumbs/perro-titan.png"; }
          if($area == 'imgtitangatoizq'){$path = "img/home/productos/gato-titan.png"; $thumbpath ="img/home/productos/thumbs/gato-titan.png"; }
          if($area == 'imgtitangatoder'){$path = "img/home/productos/titan-gato.png"; $thumbpath ="img/home/productos/thumbs/titan-gato.png"; }
          break;
        case 'rocko':
          if($area == 'imgrockoIzqExt'){$path = "img/home/productos/perro-rocko.png"; $thumbpath ="img/home/productos/thumbs/perro-rocko.png"; }
          if($area == 'imgrockoIzqInt'){$path = "img/home/productos/rocko-plus-complete.png"; $thumbpath ="img/home/productos/thumbs/rocko-plus-complete.png"; }
          if($area == 'imgrockoDerInt'){$path = "img/home/productos/rocko-perro.png"; $thumbpath ="img/home/productos/thumbs/rocko-perro.png"; }
          if($area == 'imgrockoDerExt'){$path = "img/home/productos/perro-rocko-cafe.png"; $thumbpath ="img/home/productos/thumbs/perro-rocko-cafe.png"; }
          break;

        default:
          // code...
          break;
      }

      $intervention = new ImageManager(array('driver' => 'gd'));
      $img = $intervention->make($ImageCont['tmp_name']);
      $thumbnail = $intervention->make($ImageCont['tmp_name']);
      $thumbnail->fit(300, 300);
      $img->save($path);
      $thumbnail->save($thumbpath);
    }

    public function UpdatePresentacionImage($position, $section, $ImageCont)
    {
      switch ($position) {
        case 'smartbitesperro':
          if($section == 'cachorro'){$path = "img/home/productos/smart_bites_neuro_active_adulto.png"; $thumbpath ="img/home/productos/smart-bites/thumbs/smart_bites_neuro_active_adulto.png"; }
          if($section == 'razapequeña'){$path = "img/productos/smart-bites/smart-bites-neuro-active-adulto-raza-pequena.png"; $thumbpath ="img/home/productos/smart-bites/thumbs/smart-bites-neuro-active-adulto-raza-pequena.png"; }
          if($section == 'adulto'){$path = "img/productos/smart-bites/render_bolsa_adulto_SB.png"; $thumbpath ="img/home/productos/smart-bites/thumbs/render_bolsa_adulto_SB.png"; }
          if($section == 'senior'){$path = "img/productos/smart-bites/render_bolsa_senior_SB.png"; $thumbpath ="img/home/productos/smart-bites/thumbs/render_bolsa_senior_SB.png"; }
          break;


        default:
          // code...
          break;
      }
      $intervention = new ImageManager(array('driver' => 'gd'));
      $img = $intervention->make($ImageCont['tmp_name']);
      $thumbnail = $intervention->make($ImageCont['tmp_name']);
      $thumbnail->fit(300, 300);
      $img->save($path);
      $thumbnail->save($thumbpath);
    }

}
