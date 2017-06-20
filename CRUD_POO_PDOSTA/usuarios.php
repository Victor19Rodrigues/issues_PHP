<?php
	class Usuarios{
		private $db;

		public function __construct(){
			
			try{
				$this->db = new PDO("mysql:dbname=user;host=localhost", "root", "bel120508");
			}catch(PDOException $e){
				echo "FALHA: ".$e->getMessage();
			}
		}

		public function selecionar($id){
			$sql = $this->db->prepare("SELECT * FROM usuario WHERE id = :id");
			$sql->bindValue(":id", $id);

			$sql->execute();

			$array = array();
			if($sql->rowCount() > 0){
				$array = $sql->fetch();
			}

			return $array;
		}

		public function insert($nome, $email, $senha){
			$sql = $this->db->prepare("INSERT INTO usuario SET nome=:nome, email=:email, senha=:senha");
			$sql->bindParam(":nome", $nome);
			$sql->bindParam(":email", $email);
			$sql->bindParam(":senha", md5($senha));

			$sql->execute();
		}

		public function update($nome, $email, $senha, $id){
			$sql = $this->db->prepare("UPDATE usuario SET nome = ?, email = ?, senha = ? WHERE id = ?");
			$sql->execute(array($nome, $email, md5($senha), $id));
		}

		public function delete($id){

			$sql = $this->db->prepare("DELETE FROM usuario WHERE id = ?");
			$sql->bindValue(1, $id);
			$sql->execute();
		}
	}
?>