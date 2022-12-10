<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marcadores extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'id',
    'name',
    'lat',
    'lng',
    'category',
    'address',
    'address2',
    'city',
    'state',
    'postal',
    'phone',
    'phone2',
    'linkmap',
    'web',
    'hours1',
    'hours2',
    'hours3',
    'featured',
    'features',
    'date',
  ];
}
