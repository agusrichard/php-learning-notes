<?php 

  class Weather {
    
    public static $tempConditions = ['cold', 'mild', 'warm'];

    public static function celciusToFarenheit($c) {
      return $c * 9 / 5 + 32;
    }

    public static function determineTempCondition($f) {
      if ($f < 40) {
        return self::$tempConditions[0];
      } else if ($f < 70) {
        return self::$tempConditions[1];
      } else {
        return self::$tempConditions[2];
      }
    }

  }

  // print_r(Weather::$tempConditions);
  echo Weather::celciusToFarenheit(50);
  echo Weather::determineTempCondition(50);


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