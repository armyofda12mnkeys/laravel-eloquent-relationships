<?php

namespace App\Models\ManyToMany;

use Illuminate\Database\Eloquent\Model;

class AppUser extends Model
{
  protected $guarded = [];
  /**
  * The roles that belong to the user.
  */
  public function roles()
  {
    return $this->belongsToMany('App\Models\ManyToMany\Role')
    ->withTimestamps(); //If you want your pivot table to have automatically maintained created_at and updated_at timestamps, use the withTimestamps method on the relationship definition:
  }
  
}