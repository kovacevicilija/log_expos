<?php

	session_start();

	
	if(isset($_SESSION['user_id']))
		
		{
			
			header("Location: index.php");
			
		}

	require ("db.php");
	
	
	$poruka = "";
	

<<<<<<< HEAD
	 if(!empty($_POST['email']) && !empty($_POST['password'])){
	// if(isset($_POST['email'])){
	
	
	
	
	
=======
	 if(!empty($_POST['email']) && !empty($_POST['password'])):
	// if(isset($_POST['email'])){
	
	
	/*
	 try
		
		 {
		
		 $connecting = new PDO("mysql:host=localhost; dbname=loginposs;", "root", "");
		
		
	 }
	
		 catch (PDOException $e)
		 {
			
			 echo $e->getMessage();
			
			 exit();
			
		 }
	
		 $email = $_POST['email'];
		 $password = $_POST['password'];
		
		 $pdoquery = "INSERT INTO users (email, password) VALUES (:email, :password)";
		
		 $pdores = $connecting->prepare($pdoquery);
		
		 $pdoexe = $pdores->execute(array(":email" => $email, ":password" => $password));
	
	
	 if($pdoexe)
		
		 {
			
			 echo "Korisnik unesen";
			
		 }
		
		else
			
			 {
				
				 echo "korisnik nije unesen";
				
			 }
	
	
	*/
	
	
	
	
	 // $password = $_POST['password'];
	 // $cfp = $_POST['confirm_password'];
	 // $email = $_POST['email'];
	
	
>>>>>>> fc733090fc17ac1fa581a46d7f9881e74e334751
		$sql_query = "INSERT INTO users (email, password) VALUES (:email, :password)";
	
		// priprema query na izvrsenje iz db
		// da se izvrse same
	
		$stmt = $connecting->prepare($sql_query);
	
		$stmt->bindParam(':email', $_POST['email']);
		
		
		$password_hash = password_hash($_POST['password'], CRYPT_BLOWFISH);
<<<<<<< HEAD
	
		if($_POST["confirm_password"] == $_POST["password"]){
=======
		
>>>>>>> fc733090fc17ac1fa581a46d7f9881e74e334751
	
		$stmt->bindParam(':password',$password_hash);
	
	
	
<<<<<<< HEAD
		if($stmt->execute()){
=======
		if($stmt->execute()):
>>>>>>> fc733090fc17ac1fa581a46d7f9881e74e334751
	
			
			$poruka = "Korisnik uspjesno registriran";
			
			//die('Uspjesno registrirani');
	
	
<<<<<<< HEAD
			}
	
		else{
=======
			// }
	
		else:
>>>>>>> fc733090fc17ac1fa581a46d7f9881e74e334751

			$poruka = "Ponovno";
		
			//die('Ponovno');
		
<<<<<<< HEAD
		}
		
		
		}
		
		else{
			
			$poruka = "Unesena loznika se ne podudara";
			
			
		}
	
	}
=======
		
		endif;
	
	endif;
>>>>>>> fc733090fc17ac1fa581a46d7f9881e74e334751
	
	
	// }
	 

?>

<!DOCTYPE html>
<html>
<head>
	
	<link rel="stylesheet" type="text/css" href="main.css">
	
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

	<title>Register</title>

</head>
<body>
	
	<div class="header">
	
	<a href="index.php">Web home page</a>
	
	
	
	</div>

	<?php if(!empty($poruka)): ?>
	
	<!-- < ? = skraceno od < ? Php echo $poruka -->
	
	<p><?= $poruka ?></p>
	
	<?php endif; ?>
	
	
	<h1>Register</h1>
	<span>or <a href="login.php">login here</a></span>
	
	
	<form action="register.php" method="POST">

		<input type="text" placeholder="Unesite vas email" name="email" required>
		<input type="password" placeholder="Unesite vasu lozinku" name="password" required>
		
		<input type="password" placeholder="Potvrdite vasu lozniku" name="confirm_password" required>
		
		<input type="submit" name="insertdb" value="CLICK">
	
	
	</form>

</body>

</html>