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
// superglobals

// $_GET['name], $_POST['name]

  echo $_SERVER['SERVER_NAME'] . '<br />';
	echo $_SERVER['REQUEST_METHOD'] . '<br />';
	echo $_SERVER['SCRIPT_FILENAME'] . '<br />';
	echo $_SERVER['PHP_SELF'] . '<br />';

	// $_COOKIE, $_SESSION


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
</body>
</html>