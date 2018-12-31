<?php 


session_start();

require "db.php";

	if(isset($_SESSION['user_id']))
		
		{
			
			$pogled_rezultat = $connecting->prepare("SELECT id, email, password FROM users WHERE id = :id");
			
			$pogled_rezultat->bindParam(":id", $_SESSION['user_id']);
			
			$pogled_rezultat->execute();
			
			$rezultat = $pogled_rezultat->fetch(PDO::FETCH_ASSOC);
			
			
			
			$user = NULL; 
						
			// user nije ovjeren authenticated			
						
			
			if(count($rezultat) > 0)
				
				{
					
					// ukoliko nade korisnika ispisuje ga
					
					$user = $rezultat;
					
				}
			
		}
		
	


?>




<!DOCTYPE html>
<html>
<head>

	<title>Web app</title>
	<link rel="stylesheet" type="text/css" href="main.css">
	
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

</head>



<body>

	<?php if(!empty($user)): ?>
	
	<br/>Dobrodosli: <?= $user['email']; ?> 
	<br/><br/> logirani ste
	
	<br/> <br/>
	
	<a href="logout.php">Logout</a>
	
	<?php else:  ?>

	<h1>Please Login or Register</h1>
	<a href="login.php">Login</a> or 
	<a href="register.php">Register</a>

	<?php endif; ?>
	
</html>
</body>