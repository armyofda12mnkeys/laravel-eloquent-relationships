<?php

namespace App\Models\ManyToManyPolymorphic;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
  protected $guarded = [];
  /**
   * Get all of the video's comments.
   */
  public function tags()
  {
    return $this->morphToMany('App\Models\ManyToManyPolymorphic\Tag', 'taggable');
  }
  
}