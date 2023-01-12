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
  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view($this->f.'create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
      $messages = [
      'required' => 'El campo :attribute es obligatorio.',
      ];
      $this->validate(request(), [
        'slug' => 'nullable|unique:post,slug',
        'title' => 'required',
        'body' => 'required',
        'autor' => 'required|numeric|exists:users,id',
       ], $messages);
       //dd($request->all());
       $NewPost = new Post;
       $NewPost->slug = $request->slug;
       $NewPost->title = $request->title;
       $NewPost->body = $request->body;
       $NewPost->users_id = $request->autor;
       $NewPost->save();
       return redirect()->route('blog.index');

  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
      //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
      //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
      //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
      //
  }
}
