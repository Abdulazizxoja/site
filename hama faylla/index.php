<<?php 
	define("DB_DSN", "mysql:host=localhost;dbname=serverside;charset=utf8");
	define("DB_USER", "serveruser");
	try {
		$db= new PDO(DB_DSN, DB_USER, DB_PASS);
	}
	catch (PDOException $e){
		echo "Error: ".$e->getMessage();
		die();
	}
 ?>