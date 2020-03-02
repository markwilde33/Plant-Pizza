<?php 
  
    // connect to the database
	include "database.php";

    // check connection
	if(!$conn){
		echo 'Connection error: '. mysqli_connect_error();
	}

	// write query for all pizzas
	$sql = 'SELECT title, ingredients, id FROM pizzas ORDER BY created_at';

	// get the result set (set of rows)
	$result = mysqli_query($conn, $sql);

	// fetch the resulting rows as an array
	$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

	// free the $result from memory (good practice)
	mysqli_free_result($result);

	// close connection
	mysqli_close($conn);

	print_r($pizzas);

?>
<!DOCTYPE html>
<html lang="en">

<?php include('templates/header.php'); ?>

</body>

<?php include('templates/footer.php'); ?>

</html>
