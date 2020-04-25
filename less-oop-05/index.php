<?php 

  class User {

    private $username;
    private $email;

    public function __construct($username, $email) {
      $this->username = $username;
      $this->email = $email;
    }

    public function addFriend($username) {
      return "$this->username add friend with username: $username";
    }

    public function getUsername() {
      return $this->username;
    }

    public function getEmail() {
      return $this->email;
    }

  }

  $userOne = new User('Agus', 'agusrichard@example.com');

  echo $userOne->getUsername() . '<br />';
  echo $userOne->getEmail() . '<br />';
  echo $userOne->addFriend('Richard') . '<br />';

  $userTwo = new User('Richard', 'richardagus@example.com');

  echo $userTwo->getUsername() . '<br />';
  echo $userTwo->getEmail() . '<br />';
  echo $userTwo->addFriend('Richard') . '<br />';

  // Get properties
  // print_r(get_class_vars('User'))  . '<br />';

  // // Get methods
  // print_r(get_class_methods('User')) . '<br />';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Object Oriented PHP</title>
</head>
<body>
    
</body>
</html>