<?php
	$vetor = array(
		array("nome"=>"Victor", "idade"=>22),
		array("nome"=>"Andre", "idade"=>122),
		array("nome"=>"Laurinda", "idade"=>209)

	);

	foreach($vetor as $aluno){
		echo 'Membro: '.$aluno['nome']." Idade:".$aluno['idade'].'<br>';
	}
?>