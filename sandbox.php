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