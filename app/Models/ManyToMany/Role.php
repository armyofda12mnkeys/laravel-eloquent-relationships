<?php

namespace App\Models\ManyToMany;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
  protected $guarded = [];
  /**
  * The users that belong to the role.
  */
  public function users()
  {
    return $this->belongsToMany('App\Models\ManyToMany\User')
      ->using('App\Models\ManyToMany\AppUserRole'); //If you would like to define a custom model to represent the intermediate table of your relationship, you may call the using method when defining the relationship.
  }
  
}