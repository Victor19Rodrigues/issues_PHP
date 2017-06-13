<?php
	//Gerar sessao
	session_start();
	
	$_SESSION['teste'] = "Victor";
	echo 'Meu nome é: '.$_SESSION['teste'];

	//Gerar Cookie
	//param = nome do cookie, informação, duração do cookie
	setcookie("meuteste", "Victor", time()+3600);
	echo 'Meu cookie é de: '.$_COOKIE['meuteste'];
?>