<?php

namespace App\Models\ManyToManyPolymorphic;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
  protected $guarded = [];
  /**
  * Get all of the posts that are assigned this tag.
  */
  public function posts()
  {
    return $this->morphedByMany('App\Models\ManyToManyPolymorphic\Post', 'taggable');
  }

  /**
  * Get all of the videos that are assigned this tag.
  */
  public function videos()
  {
    return $this->morphedByMany('App\Models\ManyToManyPolymorphic\Video', 'taggable');
  }
  
}