<?php 

  // $num = 50;
  // if ($num < 50) {
  //   echo 'Num is less than 50';
  // } elseif($num === 50) {
  //   echo 'Num is 50, bruh';
  // } else {
  //   echo 'Num is greater than 50';
  // }

  $arr = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
  foreach ($arr as $val) {
    if ($val % 2 === 0) {
      continue;
    }
    echo 'Even! <br />';
  }

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