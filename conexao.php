<?php
	$dsn = "mysql:dbname=user;host=localhost";
	$dbuser = "root";
	$dbpass = "bel120508";

	try{

		$pdo = new PDO($dsn, $dbuser, $dbpass); //inicia a classe PDO
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		//echo "Conexão estabelecida com sucesso!";
		
		//--------------------------SELECT
		/*$sql = "SELECT *FROM usuario";
		$result = $pdo->query($sql);

		if($result->rowCount() > 0){
			foreach($result->fetchAll() as $usuarios){
				echo "Email: ".$usuarios['email']."<br>";
				echo "Senha: ".$usuarios['senha']."<br>";
			}
		}else{
			echo "Não há usuarios cadastrados.";
		}*/

		//------------------------------INSERT
		/*$nome = "Isabela Munis de Oliveira";
		$email = "teste2@gmail.com";
		$senha = md5("354");
		
		
		$sql = "INSERT INTO usuario SET nome ='$nome', email = '$email', senha = '$senha'";
		$sql = $pdo->query($sql);

		echo "Usuário inserido: ".$pdo->lastInsertId();	*/

		//----------------------------------UPDATE
		/*$sql = "UPDATE usuario SET email = 'teste@gmail.com' WHERE email = 'abc@gmail.com'";
		$sql = $pdo->query($sql);

		$novaSenha = md5("378");

		$sql = "UPDATE usuario SET senha = '$novaSenha' WHERE id=2";
		$sql = $pdo->query($sql);

		echo "Usuário alterado com sucesso.";	*/

		//------------------------------DELETE
		$sql = "DELETE FROM usuario WHERE id = 1";
		$sql = $pdo->query($sql);

		echo "Usuário deletado da tabela.";
	
	}catch(PDOException $e){
		echo "Falhou: ".$e->getMessage();
	}
?>

