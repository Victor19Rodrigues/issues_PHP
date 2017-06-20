<?php
	require 'usuario.php';

	$usuario = new Usuario(1);
	$usuario->delete();

	echo "Usuário deeltedado.";
?>