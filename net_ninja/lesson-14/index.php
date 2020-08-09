<?php 

  function func1() {
    $num = 10;
    echo $num;
  }

  // func1();
  echo $num; /// You can't do this!
  $name = 'Agus';

  Using global function
  function func2() {
    global $name;
    echo "Hi, $name";
  }

  func2();

  function func3(&$name) {
    $name = 'Richard';
    echo "Hi, $name";
  }

  func3($name);
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