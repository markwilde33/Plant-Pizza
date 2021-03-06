<?php 
  
    // connect to the database
    include('config/db_connect.php');

    if(isset($_POST['delete'])){

        // retrieve the id from the database
        $id_to_delete = mysqli_real_escape_string($conn, $_POST['id_to_delete']);

        // make sql query
        $sql = "DELETE FROM pizzas WHERE id = $id_to_delete";

        if(mysqli_query($conn, $sql)){
          // success
          header('Location: index.php');
        } else {
          //failure
          echo 'query error: ' . mysqli_error($conn);
        }

    }
    
    //check Get request id parameter
    if(isset($_GET['id'])){

        // retrieve the id from the database
        $id = mysqli_real_escape_string($conn, $_GET['id']);

        // make sql query
        $sql = "SELECT * FROM pizzas WHERE id = $id";

        // get the query result
        $result = mysqli_query($conn, $sql);

        // fetch result in array format
        $pizza = mysqli_fetch_assoc($result);

        // clear query and close connection
        mysqli_free_result($result);
        mysqli_close($conn);
    }

?>
<!DOCTYPE html>
<html>
	
	<?php include('templates/header.php'); ?>
    <div class="container center">
    <h4 class="center pizza-details head-pad"> <strong> Pizza Details Page</strong></h4> 
    <?php if($pizza): ?>
      <div class="card z-depth-0">
        <img src="img/pizza.svg" alt="pizza" class="pizza">
			 <div class="card-content center">
        <h4 class="blue-text text-lighten-3"><?php echo htmlspecialchars($pizza['title']); ?></h4>
        <p class="grey-text text-darken-3"><strong>Created by: </strong><span class="grey-text text-darken-1"><?php echo htmlspecialchars($pizza['username']); ?></span></p>
        <p class="grey-text text-darken-1"><?php echo date($pizza['created_at']); ?></p>
        <h5 class="blue-text text-lighten-3">Ingredients:</h5>
        <ul class="grey-text text-darken-1">
          <?php foreach(explode(',', $pizza['ingredients']) as $ing):?>
          <li>
           <?php echo htmlspecialchars($ing); ?> 
          </li>
          <?php endforeach; ?>
        </ul>             
       </div>
      </div>

      <!-- Delete Form -->
      <form action="details.php" method="POST">
        <input type="hidden" name="id_to_delete" value="<?php echo $pizza['id'] ?>">
        <input type="submit" name="delete" value="Delete" class="btn brand z-depth-0">
      </form>
       
    <?php else: ?>
       <h4><strong>Pizza not found, when you know better, do better</strong></h4>
       <div><a href="index.php" class="btn brand z-depth-0">Go Back</a></div>
    <?php endif; ?>
    </div>
    

	<?php include('templates/footer.php'); ?>

</html>
