<?php 

  function sayHello($name = '') {
    echo "Hi, $name";
    echo '<br />';
  }

  function sayHi($person) {
    return "Hi, I am {$person['name']}. I am {$person['age']} years old.";
  }

  // sayHello('Agus');
  // sayHello();
  echo sayHi(['name' => 'Agus', 'age' => 22]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Learning PHP</title>
</head>
<body>
  
</body>
</html>