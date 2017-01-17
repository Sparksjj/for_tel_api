<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegisterAttempt extends Model
{
  protected $fillable = [
      'phone', 'is_attempt_success',
  ];
  public function __construct(array $attributes = array())
  {
      $digits = '1234567890';
      $randomString = '';
      $charactersLength = strlen($digits);
      for ($i = 0; $i < 4; $i++) {
          $randomString .= $digits[rand(0, $charactersLength - 1)];
      }
      $this->activation_code = $randomString;
      parent::__construct($attributes);
  }

  public function likes()
   {
       return $this->morphMany('App\Message', 'messageable');
   }
}
