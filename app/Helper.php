<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
          $res = $this->LandingSortingSection($section);
          return $res;
          dd('smartbitesdogs');
          break;
        case 'smartbitescat':
          $res = $this->LandingSortingSection($section);
          return $res;
          dd('smartbitescat');
          break;
        case 'titan':
          $res = $this->LandingSortingSection($section);
          return $res;
          dd('titan');
          break;
        case 'rocko':
          $res = $this->LandingSortingSection($section);
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
}
