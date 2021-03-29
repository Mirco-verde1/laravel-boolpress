<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

   public function posts(){

    return $this->hasOne('App\Author');
   }


   public function comment(){

    return $this->hasMany('App\Comment');
   }
}
