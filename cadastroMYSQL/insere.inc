<?php 

include 'conecta_mysql.inc';

$email 			 = $_POST['email'];
$senha  	 	 = $_POST['senha'];

$sql = "INSERT INTO usuario VALUES";
$sql .= "('$email','$senha')";

if ($conexao->query($sql) === TRUE) {
	echo  "Usuário incluído com sucesso!";
} else {
	echo "Erro: " . $sql . "<br>" . $conexao->error;
}

$conexao->close();

?>