<?php 

class User {
  public $name;
  public $age;

  // Runs when an object is created
  public function __construct ( $name, $age ) {
    echo __CLASS__ . ' instantiated.'; ;
    $this->name = $name;
    $this->age = $age;
  }

  // Called when no other references to a certain object
  // Used for cleanup, closing connections, etc
  public function __destruct () {
    echo 'destruct';
  }

  public function sayHello () {
    return $this->name . ' says hello. ';
  }
}

$user1 = new User( 'Leo', 24 );

echo $user1->name;
echo '<br>';
echo $user1->age;

echo '<br>';

$user2 = new User( 'Sara', 25 );

echo $user2->name;
echo '<br>';
echo $user2->age;