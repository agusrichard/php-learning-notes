<?php 

  $file = 'readme.txt';

  if (file_exists($file)) {
    // Read file
    // echo readfile($file) . '<br />';

    // // copy($file, 'quotes.txt');

    // echo realpath($file) . '<br />';
    // echo filesize($file) . '<br />';

    // rename($file, 'test.txt');

  } else {
    echo 'File does not exists';
  }

  // Make directory
  mkdir('quotes');

?>