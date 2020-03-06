<?php 
  
    // connect to the database
    include('config/db_connect.php');
    
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
    <h4 class="center pizza-details"> <strong> Pizza Details Page</strong></h4> 
    <?php if($pizza): ?>

        <h4><?php echo htmlspecialchars($pizza['title']); ?></h4>
        <p><strong>Created by: </strong><?php echo htmlspecialchars($pizza['username']); ?></p>
        <p><?php echo date($pizza['created_at']); ?></p>
        <h5>Ingredients:</h5>
        <ul>
            <?php foreach(explode(',', $pizza['ingredients']) as $ing):?>
                <li>
                    <?php echo htmlspecialchars($ing); ?> 
                </li>
            <?php endforeach; ?>
         </ul>
    <?php else: ?>
       <h4><strong>Pizza not found, when you know better, do better</strong></h4>
       <div><a href="index.php" class="btn brand z-depth-0">Go Back</a></div>
    <?php endif; ?>
    </div>
    

	<?php include('templates/footer.php'); ?>

</html>
