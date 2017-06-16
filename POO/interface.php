<?php
	interface Animal{ //SEMPRE possui metodos publicos

		public function andar();
	
	}

	class Cachorro implements Animal{
		public function andar(){
			echo 'Andando....';
		}
	}

	$cachorro = new Cachorro();
	$cachorro->andar();
?>