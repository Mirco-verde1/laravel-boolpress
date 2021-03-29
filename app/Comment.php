<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
  public function info(){

      return $this->belongsTo('App\Post');
  }
}
