<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\SoftDeletes;
use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Content;
use App\Helper;

class SmartbitesController extends Controller
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

  private $f = 'smartbitesgato.';

  /**
   * Show the Smart Bites Gato page content settings.
   *
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function index()
  {
      $ContentList = Content::where('page', 'smartbitesgato')->get();
      //dd($ContentList);
      return view($this->f.'index', [
        'Contenidos' => $ContentList,
      ]);
  }
}
