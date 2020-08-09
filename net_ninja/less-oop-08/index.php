<?php 

  class User {

    private $username;
    private $email;
    public $role = 'member';

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

    public function setUsername($username) {
      $this->username = $username;
    }

    public function setEmail($email) {
      $this->email = $email;
    }

    public function message() {
      return "$this->email sent a message";
    }

  }

  class AdminUser extends User {
    
    public $isAdmin = true;
    public $role = 'admin';

    public function __construct($username, $email, $level) {
      $this->level = $level;
      parent::__construct($username, $email);
    }

    public function message() {
      return 'Admin sent you a message';
    }
  }

  $userOne = new User('Agus', 'agusrichard@example.com');

  echo $userOne->getUsername() . '<br />';
  echo $userOne->getEmail() . '<br />';
  echo $userOne->addFriend('Richard') . '<br />';

  $userTwo = new User('Richard', 'richardagus@example.com');

  $userTwo->setUsername('Agus Richard');

  echo $userTwo->getUsername() . '<br />';
  echo $userTwo->getEmail() . '<br />';
  echo $userTwo->addFriend('Richard') . '<br />';
  echo $userTwo->message();

  $userThree = new AdminUser('Lubis', 'lubis@example.com', 5);
  echo $userThree->isAdmin;
  echo $userThree->level;
  echo $userThree->getUsername();
  echo $userThree->getEmail();
  echo $userThree->message();

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