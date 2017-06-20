<?php
	class Usuario{
		private $nome;
		private $id;
		private $email;
		private $senha;
		private $pdo; 

		public function __construct($usuario){

			try{
					$this->pdo = new PDO("mysql:dbname=user;host=localhost", "root", "bel120508");
			}catch(PDOException $e){
					echo "FALHOU: ".$e->getMessage();
			}

			if(!empty($usuario)){
				
				$sql = "SELECT *FROM usuarioBD WHERE id=?";
				$sql = $this->pdo->prepare($sql);
				$sql->execute(array($usuario));

				if($sql->rowCount() > 0){
					$data = $sql->fetch();

					$this->id = $data['id'];
					$this->email = $data['email'];
					$this->nome = $data['nome'];
					$this->senha = $data['senha'];
				}
			}
		}

		public function getId(){
			return $this->id;
		}

		public function setEmail($email){
			$this->email= $email;
		}

		public function getEmail(){
			return $this->email;
		}

		public function setNome($nome){
			$this->nome = $nome;
		}

		public function getNome(){
			return $this->nome;
		}

		public function setSenha($senha){
			$this->senha = md5($senha);
		}

		public function salvar(){
			if(!empty($this->id)){

				$sql = "UPDATE usuarioBD SET email=?, senha = ?, nome = ? WHERE id = ?";
				$sql = $this->pdo->prepare($sql);

				$sql->execute(array($this->email, $this->senha, $this->nome, $this->id));

			}else{

				$sql = "INSERT INTO usuarioBD SET email=?, senha =?, nome = ?";
				$sql = $this->pdo->prepare($sql);

				$sql->execute(array($this->email, $this->senha, $this->nome));

			}	
		}

		public function delete(){
			$sql = "DELETE FROM usuarioBD WHERE id = ?";
			$sql = $this->pdo->prepare($sql);

			$sql->execute(array($this->id));
		}
	}
?>