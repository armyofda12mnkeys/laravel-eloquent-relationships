<?php

namespace App\Models\OneToManyPolymorphic;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  protected $guarded = [];
  /**
   * Get all of the post's comments.
   */
  public function comments()
  {
    return $this->morphMany('App\Models\OneToManyPolymorphic\Comment', 'commentable');
  }
  
}
