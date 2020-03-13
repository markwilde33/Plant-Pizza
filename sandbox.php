<?php
// ternary operators

$score = 30;
$points = 50;

if($points > 40){
  echo 'high score!';
} else {
  echo 'low score!';
}

?><br><?php

//if we want to store the result returned
$val = $score > 40 ? 'high score!' : 'low score!';
echo $val; 

// or if we just want to output it to the browser
?><br><?php
echo $score > 40 ? 'high score!' : 'low score!';
?><br><?php


// super globals

// $_GET['name], $_POST['name]

  echo $_SERVER['SERVER_NAME'] . '<br />';
	echo $_SERVER['REQUEST_METHOD'] . '<br />';
	echo $_SERVER['SCRIPT_FILENAME'] . '<br />';
	echo $_SERVER['PHP_SELF'] . '<br />';

	// $_COOKIE, $_SESSION

  // sessions, use isset to check if user has submitted the form
  if(isset($_POST['submit'])){
    // use the session_start function to start a session
    session_start();
    // use the $_SESSION super global to store the variable 'name' and set it equal to the 'name' submitted in the form
    $_SESSION['name'] = $_POST['name'];
    //redirect user, overwrite current form action, go to index.php when form is submitted
    header('Location: index.php');

  }



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <p><?php echo $score > 40 ? 'high score!' : 'low score!'; ?></p>
  <br><br>

  <!-- <form action="sandbox.php"> 
    Use the PHP super global PHP_SELF to return the page when the form is submitted instead of inputting the page
    name, if the page name was changed, PHP_SELF would point to the new page name when the form is submitted -->
  <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">   
    <label for="name">enter your name</label>
    <input type="text" name="name">
    <input type="submit" name="submit" value="submit">
  </form>

  
</body>
</html>