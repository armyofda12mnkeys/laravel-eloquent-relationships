<?php

namespace App\Models\HasManyThrough;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
  protected $guarded = [];
  /**
  * Get the post that owns the comment.
  */
  public function post()
  {
    return $this->belongsTo('App\Models\HasManyThrough\Post');
  }
  
}
