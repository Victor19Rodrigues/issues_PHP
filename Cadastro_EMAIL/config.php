<?php
	try{
		$dsn = "mysql:dbname=user;host=localhost";
		$dbuser = "root";
		$dbpass = "bel120508";

		$pdo = new PDO($dsn, $dbuser, $dbpass);
	}catch(PDOException $e){
		echo "FALHA: ".$e->getMessage();
	}
?>