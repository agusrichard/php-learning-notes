<?php 

  // ---------- Indexed Array ------------
  $nums1 = [0, 1, 2, 3, 4];
  $nums2 = array(5, 6, 7, 8, 9);

  echo $nums1[0];
  echo $nums2[0];
  print_r($nums1);

  $list = ['Agus', 0, 1, 'Richard'];
  print_r($list);

  $nums1[0] = 0;
  $nums1[] = 5; // Push to the last position
  array_push($nums1, 6); // Push to the last position
  print_r($nums1);

  echo count($nums1); // Array's length

  print_r(array_merge($nums1, $nums2));


  // ------------- Associative Array (Key-value pairs) -----------------

  $people = ['Agus' => 'Richard', 'Sekar' => 'Hana'];
  print_r($people);
  echo $people['Agus'];
  $people['Something'] = 'Something';
  print_r($people);


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