<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Helper;
use App\User;
use Auth;

class UsersController extends Controller
{
    use SoftDeletes;

  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
      $this->middleware('AdminOnly');
  }

  private $f = 'users.';

  public function index()
  {
      if (Auth::user()->type == 0) {
          $Users = User::all();
        }
        else {
          $Users = User::where('type',2)->get();
        }
      //dd($Users);
      return view($this->f.'index', [
        'Users' => $Users,
      ]);
  }
}
