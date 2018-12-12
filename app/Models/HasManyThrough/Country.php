<?php

namespace App\Models\HasManyThrough;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
  protected $guarded = [];
  /**
  * Get all of the posts for the country.
  */
  public function posts()
  {
    return $this->hasManyThrough('App\Models\HasManyThrough\Post', 'App\Models\HasManyThrough\AppUser');
  }
  
  public function appUser()
  {
    return $this->hasMany('App\Models\HasManyThrough\AppUser');
  }
  
}
