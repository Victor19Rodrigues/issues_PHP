<?php 
	require_once 'usuarios.php';

	$u = new Usuarios();
	$u->delete(3);