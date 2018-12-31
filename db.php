<?php


	$konekcija = "localhost";
	$username = "root";
	$password = "";
	$db = "loginposs";
	
	try{
		
		$connecting = new PDO("mysql:host=$konekcija; dbname=$db;", $username, $password);
		
	}
	
	catch(PDOException $e)
	
	{
		
		die("Konekcija nije dobra: " . $e->getMessage());
		
	}