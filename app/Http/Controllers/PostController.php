<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Helper;
use App\Post;

class PostController extends Controller
{

      private $f = 'blog.public.';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $PostsList = Post::where('publicado', true)->orderBy('id', 'desc')->simplePaginate(5);
      //dd($PostsList[0]->Autor->name);

      return view($this->f.'list', [
          'Posts' => $PostsList,
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
      $Post = Post::where('slug', $slug)->first();
      if ($Post == null) {
        return redirect()->route('post.index');
      }
      if($Post->publicado == true){
          //dd($Post);
          return view($this->f.'show', [
              'Post' => $Post,
            ]);

      }
      else{
        return redirect()->route('post.index');
      }
    }


}
