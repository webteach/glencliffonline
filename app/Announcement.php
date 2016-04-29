<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    /**
     * The attributes that are mass assignable.
     * 
     * @var array
     */
     protected $fillable = ['name'];
     
     
     /**
      * Get the user that owns the announcement.
      */
      public function user()
      {
          return $this->belongsTo(User::class);
      }
}