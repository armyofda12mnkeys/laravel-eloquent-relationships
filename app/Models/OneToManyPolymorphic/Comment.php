<?php

namespace App\Models\OneToManyPolymorphic;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
  protected $guarded = [];
  /**
   * Get all of the owning commentable models.
   */
  public function commentable()
  {
    return $this->morphTo();
  }
  
}
