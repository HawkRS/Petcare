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


}
