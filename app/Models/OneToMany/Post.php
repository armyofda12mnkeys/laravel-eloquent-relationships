<?php

namespace App\Models\OneToMany;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  protected $guarded = [];
  /**
  * Get the comments for the blog post.
  */
  public function comments()
  {
    return $this->hasMany('App\Models\OneToMany\Comment');
  }
  
}
