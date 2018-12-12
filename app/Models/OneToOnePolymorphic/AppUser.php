<?php

namespace App\Models\OneToOnePolymorphic;

use Illuminate\Database\Eloquent\Model;

class AppUser extends Model
{
  protected $guarded = [];
  /**
   * Get the user's image.
   */
  public function image()
  {
    return $this->morphOne('App\Models\OneToOnePolymorphic\Image', 'imageable');
  }
  
}
