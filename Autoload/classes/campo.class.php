<?php
	class campo{
		private $largura;
		private $altura;
		private $comprimento;

		public function set($l, $a, $c){
			$this->largura = $l;
			$this->altura = $a;
			$this->comprimento = $c;
		}

		public function getLargura(){
			return $this->largura;
		}

		public function getAltura(){
			return $this->altura;
		}

		public function getComprimento(){
			return $this->comprimento;
		}

	}
?>