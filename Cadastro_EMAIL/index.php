<?php
	
	if(isset($_POST['nome']) && !empty($_POST['nome'])){
		$nome = addslashes($_POST['nome']);
		$email = addslashes($_POST['email']);

		require 'config.php';

		$pdo->query("INSERT INTO cadastro SET nome = '$nome', email = '$email'");
		$id = $pdo->lastInsertId();

		$md5 = md5($id);

		$link = 'http://www.b7web.com.br/cadastroconfirma/confirmar.php?h='.$md5;

		$assunto = "Confirme seu cadastro";
		$msg = "Clique no link abaixo para confirmar seu cadastro:\n\n".$link;
		$headers = "From: suporte@b7web.com.br"."\r\n"."X-Mailer: PHP/".phpversion();

		mail($email, $assunto, $msg, $headers);

		echo "<h2>OK! Confirme o seu cadastro agora.</h2>";
		exit;

	}

?>


<form method="POST">
	Nome: <input type="text" name="nome"><br><br>
	Email: <input type="text" name="email"><br><br>

	<input type="submit" value="Cadastrar">
</form>