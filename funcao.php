<?php
	/*function somarNumero($x, $y){
		$resultado = $x + $y;

		return $resultado;
	}

	$resultado = somarNumero(10,20);
	echo 'Resultado: '.$resultado;*/
	function calculaIdade(){
		$nome = $_GET['nome'];
		$ano = $_GET['ano'];
		$sexo = $_GET['sexo'];
		$idade = date("Y") - $ano;
		return $nome." tem idade de ".$idade." e é do sexo ".$sexo;
	}

	$str = calculaIdade();
	echo $str;
?>

<!DOCTYPE html>
<html>
<head>
	<title>Testando</title>
</head>
<body>
	<form>
		Nome: <input type="text" name="nome"><br><br>
		Data de Nascimento: <input type="number" name="ano"><br>
		<fieldset><legend>Sexo</legend>
		<input type="radio" name="sexo" id="masc" value="masculino">
		<label for="masc">Masculino</label><br>
		<input type="radio" name="sexo" id="fem" value="feminino">
		<label for="fem">Feminino</label>
		</fieldset><br>
		<input type="submit" name="Enviar">
	</form>
</body>
</html>