<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Helper;

class BlogController extends Controller
{

    private $f = 'blog.';

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
   * Show the application dashboard.
   *
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function index()
  {
    $PostsList = Post::all();
    return view($this->f.'list', [
        'Posts' => $PostsList,
      ]);
  }
}
