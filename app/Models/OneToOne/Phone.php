<?php

namespace App\Models\OneToOne;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
  protected $guarded = [];
  /**
  * Get the user that owns the phone.
  */
  public function user()
  {
    return $this->belongsTo('App\Models\OneToOne\User');
  }
  
}
