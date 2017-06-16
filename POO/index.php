<?php
	//public: total acesso
	//private: só há acesso pela classe
	//protected: pode ser acessada pela propria classe ou pelas classes que agregam com ela. EX: Humano -> Prefeito
	
	class Pessoa{

		public $nome;
		private $idade;
		private $endereco;

		public function __construct($pIdade){ //Construtor
			$this->setIdade($pIdade);
		}

		public function getIdade(){
			return $this->idade;
		}

		public function setIdade($pIdade){
			$this->idade = $pIdade;
		}

		public function trocarSenha(){
			echo 'Senha Trocada';
		}
	}

	//Instanciar classe
	/*$victor = new Pessoa("");
	$victor->trocarSenha(); //acesso ao metodo(função), somente funciona se o metodo for "public"

	$joao = new Pessoa();
	$joao->trocarSenha();

	//ou
	Pessoa::trocarSenha();*/ //funciona somente para função "public", e nao "cria" nenhum objeto do tipo pessoa, ou seja, nao há como manuseá-lo.NÃO É RECOMENDADO

	//--------------------------------------------------------------------
	$pessoa = new Pessoa(10);
	$pessoa->nome = "Victor"; //somente funciona se o atributo for "public"
	//$pessoa->setIdade("154");     // } private acessa com getter e setter
	$idade = $pessoa->getIdade(); // } private acessa com getter e setter

	echo 'O nome da pessoa: '.$pessoa->nome.' e possui '.$idade.' anos.';
?>