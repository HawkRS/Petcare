<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
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

  public function store(Request $request)
  {
    $messages = [
      'required' => 'El campo :attribute es obligatorio.',
      'unique' => 'Este :attribute ya existe en los registros',
      'confirmed' => 'Las contraseñas no coinciden',
      'min' => 'El campo :attribute requiere de al menos 8 caracteres',
      'regex' => 'El campo :attribute tiene un formato invalido'
    ];
    $this->validate(request(), [
      'name' => 'required|string|max:255',
      'email' => 'required|string|email|max:255|unique:users',
      'password' => 'required|string|min:8|confirmed',
    ], $messages);
    $NewUser = new User;
    $NewUser->name = $request->name;
    $NewUser->email = $request->email;
    $NewUser->password = Hash::make($request->password);
    $NewUser->save();

    return redirect()->route('users.index');
    //dd($request->all());
  }

  public function edit($id)
  {
    //$id = 89;
    $EditedUser = User::findorfail($id);
    //dd($EditedUser);

    return view($this->f.'edit', [
      'Usuario' => $EditedUser,
    ]);
  }

  public function update(Request $request,$id)
  {
    $messages = [
      'required' => 'El campo :attribute es obligatorio.',
      'unique' => 'Este :attribute ya existe en los registros',
      'confirmed' => 'Las contraseñas no coinciden',
      'min' => 'El campo :attribute requiere de al menos 8 caracteres',
      'regex' => 'El campo :attribute tiene un formato invalido'
    ];
    $this->validate(request(), [
      'name' => 'required|string|max:255',
      'email' => 'required|string|email|max:255|',Rule::unique('email')->ignore($request->email, 'email'),
      'password' => 'nullable|string|min:8|confirmed',
    ], $messages);
    //dd($request->all());
    $EditedUser = User::findorfail($id);
    $EditedUser->name = $request->name;
    $EditedUser->email = $request->email;
    if($request->password != null){ $EditedUser->password = Hash::make($request->password); }
    $EditedUser->save();

    return redirect()->route('users.index');
  }

  public function delete($id)
  {
    $DeletedUser = User::findorfail($id);
    $DeletedUser->delete();
    return redirect()->route('users.index');
  }


}
