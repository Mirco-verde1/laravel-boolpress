<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
  public function post_comment(){
      return $this->hasOne('App\Post');
  }
}