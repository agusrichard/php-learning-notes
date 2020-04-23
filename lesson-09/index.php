<?php 

  $someArray = [0, 1, 2, 3, 4, 5]  ;
  for ($i = 0; $i < count($someArray); $i++) {
    echo $someArray[$i] . '<br />';
  };

  foreach ($someArray as $value) {
    echo $value;
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