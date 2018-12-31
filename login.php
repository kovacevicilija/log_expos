<?php

	session_start();

	
	
	if(isset($_SESSION['user_id']))
		
		{
			
			header("Location: index.php");
			
		}
		
		
		require ("db.php");
	

	 if(!empty($_POST['email']) && !empty($_POST['password'])): 
	
	
		$userfdb = $connecting->prepare("SELECT id, email, password FROM users WHERE email = :email");
		
		$userfdb->bindParam(":email", $_POST['email']);
		
		$userfdb->execute();
		
		$pogled_rezultat = $userfdb->fetch(PDO::FETCH_ASSOC);
		
		$poruka = "";
		
		
		// count promjenjen na empty
		
		if(!empty($pogled_rezultat) && password_verify($_POST['password'], $pogled_rezultat['password']))
		{
			
			//die ("We have a login");
			
			// postavljenje sessiona
			
			
			$_SESSION['user_id'] = $pogled_rezultat['id'];
			header("Location: index.php");
			
		}
		
		else {
			
			$poruka = "Niste unjeli tocne podatke";
			
			
		}
	
	
		//echo $_POST['email'];
	 
		//$password = $_POST['password'];
	 
		//echo "Sifra je : " . password_hash($password, CRYPT_BLOWFISH);
	
	 //die();
	 endif;

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="main.css">
	
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<title>Login</title>

</head>
<body>

	<div class="header">
	
	<a href="index.php">Web home page</a>
	
		
	</div>
	
	
	<?php if(!empty($poruka)): ?>
	
	<!-- < ? = skraceno od < ? Php echo $poruka -->
	
	<p><?= $poruka ?></p>
	
	<?php endif; ?>
	
	
	
	
	
	

	<h1>Login here</h1>
	<span>or <a href="register.php">register here</a></span>
	
	<form action="login.php" method="POST">

		<input type="text" placeholder="Unesite vas email" name="email" required>
		<input type="password" placeholder="Unesite vasu lozinku" name="password" required>
		
		<input type="submit" value="CLICK">
	
	
	</form>
	

</body>

</html>