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
          case 'smartbitesperro':{
              if($imgarea == 'izqext'){$path = "img/productos/smart-bites/smart-bites-neuro-active-senior.png"; $thumbpath ="img/productos/smart-bites/thumbs/smart-bites-neuro-active-senior.png"; }
              if($imgarea == 'izqint'){$path = "img/productos/smart-bites/inicio_smart_perro.png"; $thumbpath ="img/productos/smart-bites/thumbs/inicio_smart_perro.png"; }
              if($imgarea == 'derint'){$path = "img/productos/smart-bites/smart-bites-neuro-active-adulto.png"; $thumbpath ="img/productos/smart-bites/thumbs/smart-bites-neuro-active-adulto.png"; }
              if($imgarea == 'derext'){$path = "img/productos/smart-bites/smart-bites-neuro-active-cachorro.png"; $thumbpath ="img/productos/smart-bites/thumbs/smart-bites-neuro-active-cachorro.png"; }
          }
            break;
          case 'smartbitesgato':{
              if($imgarea == 'izqext'){$path = "img/productos/smart-bites/gato/smart-bites-neuro-active-gato-adulto.png"; $thumbpath ="img/productos/smart-bites/gato/thumbs/smart-bites-neuro-active-gato-adulto.png"; }
              if($imgarea == 'derext'){$path = "img/productos/smart-bites/gato/gato_beneficios.png"; $thumbpath ="img/productos/smart-bites/gato/thumbs/gato_beneficios.png"; }
          }
            break;
          case 'titan':{
              if($imgarea == 'izq'){$path = "img/productos/titan/titan-perro.png"; $thumbpath ="img/productos/titan/thumbs/titan-perro.png"; }
              if($imgarea == 'centro'){$path = "img/productos/titan/perro_gato.png"; $thumbpath ="img/productos/titan/thumbs/perro_gato.png"; }
              if($imgarea == 'der'){$path = "img/productos/titan/titan-gato.png"; $thumbpath ="img/productos/titan/thumbs/titan-gato.png"; }
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
          if($area == 'imgtitanizq'){$path = "img/home/productos/titan-perro.png"; $thumbpath ="img/home/productos/thumbs/titan-perro.png"; }
          if($area == 'imgtitancentro'){$path = "img/home/productos/perro-gato.png"; $thumbpath ="img/home/productos/thumbs/perro-gato.png"; }
          if($area == 'imgtitander'){$path = "img/home/productos/titan-gato.png"; $thumbpath ="img/home/productos/thumbs/titan-gato.png"; }
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
          if($section == 'cachorro'){$path = "img/productos/smart-bites/render_bolsa_cachorro_SB.png"; $thumbpath ="img/productos/smart-bites/thumbs/render_bolsa_cachorro_SB.png"; }
          if($section == 'razapequeña'){$path = "img/productos/smart-bites/smart-bites-neuro-active-adulto-raza-pequena.png"; $thumbpath ="img/productos/smart-bites/thumbs/smart-bites-neuro-active-adulto-raza-pequena.png"; }
          if($section == 'adulto'){$path = "img/productos/smart-bites/render_bolsa_adulto_SB.png"; $thumbpath ="img/productos/smart-bites/thumbs/render_bolsa_adulto_SB.png"; }
          if($section == 'senior'){$path = "img/productos/smart-bites/render_bolsa_senior_SB.png"; $thumbpath ="img/productos/smart-bites/thumbs/render_bolsa_senior_SB.png"; }
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

    public function BeneficiosImageName($benefit, $ImageCont,$page)
    {
      //dd($benefit);
      if ($page== 'smartbitesperro') {        // code...
        switch ($benefit) {
          case 'cachorrotopizq': { $ImagePath = 'img/productos/smart-bites/iconos/cachorro/cachorro_sistemainmune.svg'; break; }
          case 'cachorrotopder': { $ImagePath = 'img/productos/smart-bites/iconos/cachorro/cachorro_corazon_sano.svg'; break; }
          case 'cachorrobottomizq': { $ImagePath = 'img/productos/smart-bites/iconos/cachorro/cachorro_desarrollo_saludable.svg'; break; }
          case 'cachorrobottomder': { $ImagePath = 'img/productos/smart-bites/iconos/cachorro/cachorro_sistema_digestivo.svg'; break; }
          case 'pequeñostopizq': { $ImagePath = 'img/productos/smart-bites/iconos/adulto-raza-pequena/sistema_inmune_fuerte.svg'; break; }
          case 'pequeñostopder': { $ImagePath = 'img/productos/smart-bites/iconos/adulto-raza-pequena/corazon_sano.svg'; break; }
          case 'pequeñosbottomizq': { $ImagePath = 'img/productos/smart-bites/iconos/adulto-raza-pequena/metabolismo_balanceado.svg'; break; }
          case 'pequeñosbottomder': { $ImagePath = 'img/productos/smart-bites/iconos/adulto-raza-pequena/aparato_digestivo_sano.svg'; break; }
          case 'adultotopizq': { $ImagePath = 'img/productos/smart-bites/iconos/adulto/adulto_salud_integral.svg'; break; }
          case 'adultotopder': { $ImagePath = 'img/productos/smart-bites/iconos/adulto/adulto_corazon_sano.svg'; break; }
          case 'adultobottomizq': { $ImagePath = 'img/productos/smart-bites/iconos/adulto/adulto_pelaje_brillante.svg'; break; }
          case 'adultobottomder': { $ImagePath = 'img/productos/smart-bites/iconos/adulto/adulto_sistema_digestivo.svg'; break; }
          case 'seniortopizq': { $ImagePath = 'img/productos/smart-bites/iconos/senior/senior_articulaciones.svg'; break; }
          case 'seniortopder': { $ImagePath = 'img/productos/smart-bites/iconos/senior/senior_celulas.svg'; break; }
          case 'seniorbottomizq': { $ImagePath = 'img/productos/smart-bites/iconos/senior/senior_sistema_inmune.svg'; break; }
          case 'seniorbottomder': { $ImagePath = 'img/productos/smart-bites/iconos/senior/senior_aparato_digestivo.svg'; break; }

          default:
          // code...
          break;
        }
      }
      elseif ($page== 'smartbitesgato') {
        switch ($benefit) {
          case 'adultotopizq': { $ImagePath = 'img/productos/smart-bites/iconos/gato/adulto/sistema_inmune.svg'; break; }
          case 'adultotopder': { $ImagePath = 'img/productos/smart-bites/iconos/gato/adulto/salud_visual.svg'; break; }
          case 'adultobottomizq': { $ImagePath = 'img/productos/smart-bites/iconos/gato/adulto/control_bolas_pelo.svg'; break; }
          case 'adultobottomder': { $ImagePath = 'img/productos/smart-bites/iconos/gato/adulto/salud_intestinal.svg'; break; }

          default:
            // code...
            break;
        }
      }

      $file_temp = $ImageCont['tmp_name'];
      $svg = file_get_contents($file_temp);
      file_put_contents(public_path($ImagePath),$svg);
    }

}
