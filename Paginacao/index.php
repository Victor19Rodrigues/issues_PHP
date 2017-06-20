<?php

	try{
		$dsn = "mysql:dbname=sagha;host=localhost";
		$dbuser = "root";
		$dbpass = "bel120508";
		$pdo = new PDO($dsn, $dbuser, $dbpass);

	}catch(PDOException $e){
		echo "FALHA: ".$e->getMessage();
	}

	/*
		1. Calcular a quantidade total de páginas.
		2. Definir o $p.
		3. Fazer a query com LIMIT
	*/

	$qtd_por_pagina = 20;
	$total = 0;

	$sql = "SELECT COUNT(*) AS c FROM hospital";
	$sql = $pdo->query($sql);
	$sql = $sql->fetch();
	$total = $sql['c'];
	$paginas = $total/$qtd_por_pagina;

	$pg = 1;

	if(isset($_GET['p']) && !empty($_GET['p'])){
		$pg = addslashes($_GET['p']);
	}

	$p = ($pg - 1) * $qtd_por_pagina;

	$sql = "SELECT * FROM hospital LIMIT $p, $qtd_por_pagina";
	$sql = $pdo->query($sql);

	if($sql->rowCount() > 0){
		
		foreach($sql->fetchAll() as $item){
			echo $item['id'].' - '.$item['nome'].'<br>';
		}

	}

	echo '<hr>';
	for($q=0;$q<$paginas;$q++){
		echo '<a href="./?p='.($q+1).'">['.($q+1).']</a>';
	}
?>