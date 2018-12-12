<?php

namespace App\Models\HasManyThrough;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  protected $guarded = [];
  /**
  * Get the comments for the blog post.
  */
  /*
  public function comments()
  {
    return $this->hasMany('App\Models\HasManyThrough\Comment');
  }
  */
  
  public function appUser()
  {
    return $this->belongsTo('App\Models\HasManyThrough\AppUser');
  }
}