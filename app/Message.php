<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
  protected $fillable = [
      'user_id', 'title', 'body',
  ];
  protected $touches = ['messageable'];


  public function messageable()
    {
        return $this->morphTo();
    }

}
