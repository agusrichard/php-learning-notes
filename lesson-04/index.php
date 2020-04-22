<?php 

  $name = 'Agus Richard Lubis';
  define('NAME', 'Agus Richard Lubis');
  $age = 22;

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Learning PHP</title>
</head>
<body>
  <h1><?php echo 'Hello, I am learning PHP now!' ?></h1>
  <div><?php  echo $name; ?></div>
  <div><?php  echo NAME; ?></div>
  <div><?php  echo $age; ?></div>
</body>
</html>