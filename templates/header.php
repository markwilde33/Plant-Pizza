<?php 
  // start the session
  session_start();

  // how to override a session variable, must be stated before accessing the stored session variable, ie, above it
  // $_SESSION['name']= 'Mr Mayagee';

  //how to delete/unset a session variable
  // if($_SERVER['QUERY_STRING'] == 'noname'){
  //   unset($_SESSION['name']);
  // }

   // Use Null Coalescing so that id the session variable doesn't exist 'Guest' will be outputted in it's place and no erroe will be shown in the browser
  //  $name = $_SESSION['name'] ?? 'Guest';


  // access the stored name in the session super global by setting it to a variable
  $name = $_SESSION['name'];

  

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plant Based Pizza</title>
    	<!-- Compiled and minified CSS -->
  <link rel="stylesheet" 
   href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="grey lighten-4">
	<nav class="white z-depth-0">
    <div class="container">
      <strong><a href="index.php" class="left brand-logo brand-text">Plant Pizza</a></strong>
      <ul id="nav-mobile" class="right ">
        <!-- output the stored session name -->
        <li class="red-text text-lighten-3"><strong>Aye up, <?php echo htmlspecialchars($name); ?></strong></li>
        <li><a href="add.php" class="btn brand z-depth-0">Add a Pizza</a></li>
      </ul>
    </div>
  </nav>