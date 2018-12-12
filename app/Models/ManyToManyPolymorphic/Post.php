<?php

namespace App\Models\ManyToManyPolymorphic;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  protected $guarded = [];
  /**
   * Get all of the tags for the post.
   */
  public function tags()
  {
    return $this->morphToMany('App\Models\ManyToManyPolymorphic\Tag', 'taggable');
  }
  
}
