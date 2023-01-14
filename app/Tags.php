<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
  protected $table = 'tags';
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
