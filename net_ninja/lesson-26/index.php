<?php 

  // Connect to database
  $conn = mysqli_connect('localhost', 'root', '', 'ninja_pizza');

  // Check the connection
  if (!$conn) {
    echo 'Connection error: ' . mysqli_connect_error();
  }

  // Write query for all pizzas
  $sql = 'SELECT id, title, ingredients FROM pizzas';

  // Make query and get result
  $result = mysqli_query($conn, $sql);
  
  // Fetch the resulting rows as an array
  $pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

  // Free result from memory
  mysqli_free_result($result);

  // Closing connection
  mysqli_close($conn);

  print_r($pizzas);

?>

<!DOCTYPE html>
<html>
	
	<?php include('templates/header.php'); ?>

	<?php include('templates/footer.php'); ?>

</html>