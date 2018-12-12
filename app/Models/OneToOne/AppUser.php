<?php

namespace App\Models\OneToOne;

use Illuminate\Database\Eloquent\Model;

class AppUser extends Model
{
  protected $guarded = [];
  /**
   * Get the phone record associated with the user.
   */
  public function phone()
  {
    return $this->hasOne('App\Models\OneToOne\Phone');
  }
  
}