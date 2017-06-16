<?php
	require 'DAO.php';

	$dao = new DAO("localhost", "user", "root", "bel120508");

	/*$dao->insert("usuario", array(
		"nome" => 'Isabela Munis de Oliveira',
		"email" => 'isabela@gmail.com',
		"senha" => md5('123')
	));		

	echo 'Inserido com sucesso';*/

	/*$dao->query("SELECT *FROM usuario");
	echo $dao->getNumRows();/*/

	/*$dao->update("usuario", array("nome"=>"Lucas"), array("id"=>"7"));

	echo 'Usuário atualizado';*/

	$dao->delete("usuario", array("id"=>"4"));

?>