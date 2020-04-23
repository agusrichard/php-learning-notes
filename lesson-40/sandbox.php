<?php 

  $file = 'quotes.txt';

  // Opening a file for reading
  $handle = fopen($file, 'a+');

  // Read the file
  // echo fread($handle, filesize($file));

  // Read single line
  // echo fgets($handle);
  // echo fgets($handle);

  // Read single char
  // echo fgetc($handle);

  // Write to a file
  // fwrite($handle, "\nWhat the heck is wrong with this world");

  // Closing
  fclose($file);

  // Delete file
  unlink($file);

?>