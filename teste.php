<?php
/**/
	for($aux=0;$aux<10;$aux++){

		echo $aux.': '.'Victor lindo!'.'<br>';
	}

	$vetor = array("triste", "feliz", "sorridente");

	echo $vetor[1].'<br>';

	//ou 
	$vetor = array(
		"sentimento 1" => "triste",
		"sentimento 2" => "alegre",
		"sentimento" => "sorridente" 
	);

	//echo " ".$vetor["sentimento 2"];
	print_r($vetor);

	//array dentro de array
	$produto = array(
		0 => array(
			"nome" => "calça",
			"quantidade" => 10,
			"informacao" => "Moletom"
		),
		1 => array(
			"nome" => "camiseta",
			"quantidade" => 20,
			"informacao" => "Algodão"
		)
	);

	$produto[] = array(
			"nome" => "blusa",
			"quantidade" => 178,
			"informacao" => "ferro"
	);

	$produto[] = "TESTE";

	echo '<br>';
	print_r($produto);
?>