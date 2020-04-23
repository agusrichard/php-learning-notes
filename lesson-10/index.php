<?php 

  $arr = [0, 1, 2, 3, 4];
  $i = 0;
  while ($i < count($arr)) {
    echo $arr[$i];
    echo '<br />';
    $i++;
  }

  echo true;
  echo false;
  print_r(true);
  print_r(false);

  // Numbers
  echo 5 < 10;
  echo 5 == 5;
  echo 5 != 5;

  // Strings
  echo 'agus' < 'richard';  // True
  echo 'agus' > 'Agus';     // True

  echo 5 == '5';      // Loose Comparison
  echo 5 === '5';     // Strict Comparison

  echo true == '1';
  echo false == '';

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