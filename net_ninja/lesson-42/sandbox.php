<?php 

  // Classes
  class User {

    private $email;
    private $name;

    public function __construct($email, $name) {
      $this->email = $email;
      $this->name = $name;
    }

    public function login() {
      echo "The user with name $this->name logged in";
    }

    public function getName() {
      return $this->name;
    }

    public function getEmail() {
      return $this->email;
    }

    public function setName($newName) {
      $this->name = $newName;
    }

    public function setEmail($newEmail) {
      $this->email = $newEmail;
    }
  }

  $userOne = new User('agusrichard@example.com', 'Agus Richard');
  // $userOne->login();
  echo $userOne->getName();
  $userOne->setName('Richard Agus');
  echo $userOne->getName();

?>