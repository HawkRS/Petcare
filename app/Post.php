<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  protected $table = 'post';
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'id',
    'slug',
    'title',
    'banner',
    'publicado',
    'body',
    'users_id',
  ];

  /* RELACIONES */
  public function Autor() {
    //dd('hola');
    return $this->hasOne('App\User', 'id', 'users_id')->get();
  }
  public function HasTags() {
    //dd('hola');
    return $this->hasMany('App\Tags', 'post_id', 'id')->get();
  }
  public function HasSources() {
    //dd('hola');
    return $this->hasMany('App\Fuentes', 'post_id', 'id')->get();
  }
}
