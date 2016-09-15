<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ajuda Aqui</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
 <h1>
	<?php 
		session_start(); 
		if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) 
		{
			// last request was more than 30 minutes ago
			session_unset();     // unset $_SESSION variable for the run-time 
			session_destroy();   // destroy session data in storage
			header("Location: index.php");
		}
		$_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp
		
		
		
		
		if (isset($_SESSION['user']))
		{
			ECHO $_SESSION['user']->tipo." ".$_SESSION['user']->apelido." logada"; 
		}
		
		else {ECHO "ERROW";}
	?>
 </h1>
</div>

</body>
</html>