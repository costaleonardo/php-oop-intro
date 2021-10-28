<?php 

class User {
  public $name;
  public $age;
  public static $minPassLength = 6;

  // use self instead of $this when referencinf a static variable
  public static function validatePass ( $pass ) {
    if ( strlen( $pass ) >= self::$minPassLength ) {
      return true;
    } else {
      return false;
    }
  }
}

$password = 'hello';

// use :: when referencing static method
if ( User::validatePass( $password ) ) {
  echo 'Password valid.';
} else {
  echo 'Password NOT valid.';
}