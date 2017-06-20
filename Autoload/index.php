<?php
	
	//AUTOLOAD
	spl_autoload_register(function($class){
		if(file_exists('classes/'.$class.'.class.php')){
			require_once('classes/'.$class.'.class.php');
		}
	});

	$obj = new bola();
	$obj->setCor("Preto");

	echo "A cor da bola: ".$obj->getCor().'<hr>';

	$campo = new campo();
	$campo->set(10,20,30);

	echo "Medidas do campo: ".'<br>'."Altura: ".$campo->getAltura().'<br>'."Largura: ".$campo->getLargura().
		'<br>'."Comprimento: ".$campo->getComprimento();
?>