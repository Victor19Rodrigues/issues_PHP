<?php
	
	abstract class Animal{
		private $nome;
		private $idade;

		abstract protected function andar();	 ///	igual no JAVA

		public function getNome(){
			return $this->nome;
		}

		public function setNome($pNome){
			$this->nome = $pNome;
		}
	}

	class Cavalo extends Animal{
		private $qtdPatas;
		private $tipo_Pelo;

		public function andar(){ /// igual no JAVA

		}
	}

	class Gato extends Animal{
		private $qtdPatas;
		private $miado;

		public function andar(){ /// igual no JAVA

		}
	}

	$cavalo = new Cavalo();
	$cavalo->nome = "Victor";

	echo $cavalo->nome;

?>