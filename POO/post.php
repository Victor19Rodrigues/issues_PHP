<?php	

	class Post{
		private $titulo;
		private $corpo;
		private $data;
		private $comentario;
		private $qtdComentario;

		public function __construct(){

		}

		public function getTitulo(){
			return $this->titulo;
		}

		public function setTitulo($pTitulo){
			if(is_string($pTitulo)){
				$this->titulo = $pTitulo;
			}
		}

		public function addComentario($msg){
			$this->comentario[] = $msg;
			$this->contarComentarios();
		}

		public function getQtdComentario(){
			return $this->qtdComentario;
		}

		private function contarComentarios(){
			$this->qtdComentario = count($this->comentario);
		}
	}

	$post = new Post();

	$post->addComentario("Teste");
	$post->addComentario("OK");
	$post->addComentario("OK");
	$post->addComentario("Pessoal");
	$post->addComentario("Ta");
	$post->addComentario("no");	
	$post->addComentario("AR");

	echo 'O número de comentários é '.$post->getQtdComentario();

?>