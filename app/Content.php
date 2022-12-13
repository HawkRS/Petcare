<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
  protected $table = 'content';
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'id',
    'page',
    'section',
    'field',
    'type',
    'value',
  ];
}
