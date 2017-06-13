<?php

	$db = mysqli_connect("localhost","root","bel120508","user");
	
	//isset retorna TRUE ou FALSE
	if(isset($_POST['email']) && !empty($_POST['email'])){
		if(isset($_POST['senha']) && !empty($_POST['senha'])){
			$email = $_POST['email'];
			$senha = $_POST['senha'];
		}
	}

	$sql = "insert into usuario values ('$email','$senha')";
	$result = mysqli_query($db, $sql) or die("Erro de conexão: ".mysqli_error());
	$result->closeConnection(connection);
?>

<form method="POST">
	Email:<br>
	<input type="text" name="email"><br><br>

	Senha:<br>
	<input type="password" name="senha"><br><br>

	<input type="submit" name="Enviar"><br><br>
</form>