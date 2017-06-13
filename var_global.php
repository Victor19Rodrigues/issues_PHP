<?php
	/*//print_r($_SERVER);
	$nome = $_GET["nome"]; //aparece direto na URL da página
	echo "Seu nome é: ".$nome;	

	$_POST //aparece "por baixo dos panos"*/

	//Constantes
	define("URL", "http://google.com");
	echo "Meus site é: ".URL;

	$nome = "Victor";
	$nome2 = md5($nome);
	echo '<br>'.'Nome cripto.:'.$nome2;
?>

