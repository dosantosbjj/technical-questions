<?php

namespace App\Classes;

use Exception;

class Utils{

  public static function throwException($value)
  {
    throw new Exception("$value");
  }

  public static function isFieldSet($field)
  {
    isset($field) ? true : false;
  }

}