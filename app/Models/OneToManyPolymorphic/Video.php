<?php

namespace App\Models\OneToManyPolymorphic;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
  protected $guarded = [];
  /**
   * Get all of the video's comments.
   */
  public function comments()
  {
    return $this->morphMany('App\Models\OneToManyPolymorphic\Comment', 'commentable');
  }
  
}