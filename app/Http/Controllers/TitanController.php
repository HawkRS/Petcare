<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\SoftDeletes;
use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Content;
use App\Helper;

class TitanController extends Controller
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

  private $f = 'titan.';

  /**
   * Show the Smart Bites Gato page content settings.
   *
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function index()
  {
    //dd('index smartbites');
      //$ContentList = Content::where('page', 'rocko')->get();
      $ContentList = DB::table('content')
                ->where('page', 'titan')
                ->get();
      //dd($ContentList);
      return view($this->f.'index', [
        'Contenidos' => $ContentList,
      ]);
  }
}
