<?php 

  // Classes
  class User {

    public $email;
    public $name;

    public function __construct($email, $name) {
      $this->email = $email;
      $this->name = $name;
    }

    public function login() {
      echo "The user with name $this->name logged in";
    }
  }

  $userOne = new User('agusrichard@example.com', 'Agus Richard');
  $userOne->login();
  // echo $userOne->name;

?>