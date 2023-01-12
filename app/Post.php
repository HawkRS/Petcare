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
    'body',
    'users_id',
  ];

  /* RELACIONES */
  public function Autor() {
    //dd('hola');
    return $this->hasOne('App\User', 'id');
  }
  public function ingresos() {
    //dd('hola');
    return $this->hasMany('App\Models\Ingresos')->get();
  }
}
