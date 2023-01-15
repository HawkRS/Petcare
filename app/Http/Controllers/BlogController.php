<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Helper;
use App\Post;

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
    //dd($PostsList[0]->Autor->name);

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
        'slug' => 'nullable|alpha_dash|min:4|unique:post,slug',
        'title' => 'required',
        'published' => 'required',
        'body' => 'required',
        'autor' => 'required|numeric|exists:users,id',
       ], $messages);
       //dd($request->all());
       $NewPost = new Post;
       $NewPost->slug = $request->slug;
       $NewPost->title = $request->title;
       $NewPost->body = $request->body;
       $NewPost->publicado = $request->published;
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
    $Post = Post::findorfail($id);
    //dd($Post);
    return view($this->f.'show', [
        'Post' => $Post,
      ]);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
      $PostEdit = Post::findorfail($id);
      //dd($PostEdit);
      return view($this->f.'edit', [
          'PostEdit' => $PostEdit,
        ]);
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
    $PostEdit = Post::findorfail($id);
    $messages = [
    'required' => 'El campo :attribute es obligatorio.',
    ];
    $this->validate(request(), [
      'slug' => 'nullable|alpha_dash|min:4',Rule::unique('post')->ignore($request->folio, 'slug'),
      'title' => 'required',
      'published' => 'required',
      'body' => 'required',
      'autor' => 'required|numeric|exists:users,id',
     ], $messages);
     $PostEdit->slug = $request->slug;
     $PostEdit->title = $request->title;
     $PostEdit->body = $request->body;
     $PostEdit->publicado = $request->published;
     $PostEdit->users_id = $request->autor;
     $PostEdit->save();
     //dd($PostEdit);
     return redirect()->route('blog.index');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function delete($id)
  {
    $PostDeleted = Post::findorfail($id);
    //dd($PostDeleted);
    $PostDeleted->delete();
    return redirect()->route('blog.index');
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
   public function PublishToggle($id)
   {
     $PostEdit = Post::findorfail($id);
     if($PostEdit->publicado == true){
       $PostEdit->publicado = false;
     }
     else {
       $PostEdit->publicado = true;
     }
      $PostEdit->save();
      //dd($PostEdit);
      return redirect()->route('blog.index');
   }

   public function addFuente(Request $request, $id)
   {
      dd($request->all());
   }

   public function deleteFuente(Request $request, $id)
   {
      dd($request->all());
   }

   public function addTag(Request $request, $id)
   {
      dd($request->all());
   }

   public function deleteTag(Request $request, $id)
   {
      dd($request->all());
   }
}
