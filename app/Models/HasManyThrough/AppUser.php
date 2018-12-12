<?php

namespace App\Models\HasManyThrough;

use Illuminate\Database\Eloquent\Model;

class AppUser extends Model
{
  protected $guarded = [];
  
  public function country()
  {
    return $this->belongsTo('App\Models\HasManyThrough\Country');
  }
  
  
  public function posts()
  {
    return $this->hasMany('App\Models\HasManyThrough\Post');
  }
  
}