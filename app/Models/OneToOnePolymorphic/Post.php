<?php

namespace App\Models\OneToOnePolymorphic;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  protected $guarded = [];
  /**
   * Get the post's image.
   */
  public function image()
  {
    return $this->morphOne('App\Models\OneToOnePolymorphic\Image', 'imageable');
  }
  
}