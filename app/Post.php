<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

   public function infoAuthor(){

    return $this->belongsTo('App\Author');
   }


   public function comments(){

    return $this->hasMany('App\Comment');
   }
}
