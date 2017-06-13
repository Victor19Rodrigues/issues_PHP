<!DOCTYPE html>
<html>
	<head>
		<title>Verifica</title>
		<meta charset="utf-8">
	</head>
	<body>
		<?php 

		$email 			 = $_POST['email'];
		$senha  	 	 = $_POST['senha'];
		$erro 			 = 0;

		//Verifica se o campo email está preenchido corretamente
		if (strlen($email)< 8 || strstr($email, '@')==false) {
			echo "Favor digitar o seu email corretamente.<br>";
			$erro = 1;
		}

		//Verifica se o campo cidade está em branco
		if (empty($senha)) {
			echo "Favor digitar sua senha.<br>";
			$erro = 1;
		}

		//Verifica se não houve erro - neste caso chama a include para inserir os dados
		if ($erro == 0) {
			echo "Todos os dados foram digitados corretamente.<br>";
			include 'insere.inc';
		}

		?>
	</body>
</html>