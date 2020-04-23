<?php 

  // Connect to database
  $conn = mysqli_connect('localhost', 'root', '', 'ninja_pizza');

  // Check the connection
  if (!$conn) {
    echo 'Connection error: ' . mysqli_connect_error();
  }

  // Write query for all pizzas
  $sql = 'SELECT id, title, ingredients FROM pizzas ORDER BY created_at';

  // Make query and get result
  $result = mysqli_query($conn, $sql);
  
  // Fetch the resulting rows as an array
  $pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

  // Free result from memory
  mysqli_free_result($result);

  // Closing connection
  mysqli_close($conn);

  // print_r(explode(',', $pizzas[0]['ingredients']));


?>

<!DOCTYPE html>
<html>
	
	<?php include('templates/header.php'); ?>

  <h4 class="center gray-text">Pizzas!</h4>
  <div class="container">
    <div class="row">

      <?php foreach($pizzas as $pizza): ?>
        <div class="col s6 md3">
          <div class="card z-depth-0">
            <div class="card-content center">
              <h6><?php echo htmlspecialchars($pizza['title']); ?></h6>
              <ul class="grey-text">
								<?php foreach(explode(',', $pizza['ingredients']) as $ing): ?>
									<li><?php echo htmlspecialchars($ing); ?></li>
                <?php endforeach; ?>
							</ul>
            </div>
            <div class="card-action right-align">
              <a href="#" class="brand-text">More info</a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>

      <?php if (count($pizzas) >= 3): ?>
        <p>There are 3 or more pizzas</p>
      <?php else :?>
        <p>There are less than 3 pizzas</p>
      <?php endif; ?>

    </div>
  </div>

	<?php include('templates/footer.php'); ?>

</html>