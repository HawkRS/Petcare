<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fuentes extends Model
{
  protected $table = 'fuentes';
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'id',
    'fuente',
    'post_id',
  ];


}
