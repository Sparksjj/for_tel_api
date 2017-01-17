<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegisterAttempt extends Model
{
  protected $fillable = [
      'phone', 'is_attempt_success',
  ];

  public function likes()
   {
       return $this->morphMany('App\Message', 'messageable');
   }
}
