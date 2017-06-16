<?php


	class DAO{

		private $pdo;
		private $numRows;
		private $array;

		public function __construct($host, $dbname, $dbuser, $dbpass){
			
			try{

				$this->pdo = new PDO("mysql:dbname=".$dbname.";host=".$host, $dbuser, $dbpass);
			
			}catch(PDOException $e){
				echo 'Falhou: '.$e->getMessage();
			}
		}

		public function query($sql){

			$query = $this->pdo->query($sql);  //--- $this->pdo->query($sql) é a mesma que $sql = $pdo->query($sql);
			$this->numRows = $query->rowCount();
			$this->array = $query->fetchAll(); // pega o que está no banco

		}

		public function result(){
			return $this->array;
		}

		public function getNumRows(){
			return $this->numRows;
		}

		public function insert($table, $data){
			
			if(!empty($table) && (is_array($data) && count($data) > 0)){
				
				$sql = "INSERT INTO ".$table." SET "; //(1)
				$dados = array();

				//(1)INSERT INTO tabela SET (2)nome = 'fulano', email = 'email@.com'
				foreach($data as $chave => $valor){ //$chave seria o nome do campo no BD e $valor, o valor que eu estou inserindo.
					$dados[] = $chave."='".addslashes($valor)."'"; //(2)
				}

				$sql .= implode(", ", $dados);

				$this->pdo->query($sql);
			}
		}

		//caso eu mande o parametro $where_cond nulo, ele seta-o como sendo AND
		public function update($table, $data, $where = array(), $where_cond = "AND"){ 

			if(!empty($table) && (is_array($data) && count($data) > 0) && is_array($where)){

				$sql = "UPDATE ".$table." SET "; //(1)
				$dados = array();

				//(1)UPDATE tabela SET (2)nome = 'fulano', email = 'email@.com'
				foreach($data as $chave => $valor){ //$chave seria o nome do campo no BD e $valor, o valor que eu estou inserindo.
					$dados[] = $chave."='".addslashes($valor)."'"; //(2)
				}

				$sql .= implode(", ", $dados);

				if(count($where) > 0){
					$dados = array();
				
					foreach($where as $chave => $valor){ 
						$dados[] = $chave."='".addslashes($valor)."'"; 
					}

					$sql .= " WHERE ".implode(" ".$where_cond." ", $dados);
				}

				$this->pdo->query($sql);
			}
		}

		public function delete($table, $where, $where_cond = "AND"){

			if(!empty($table) && (is_array($where) && count($where) > 0)){

				$sql = "DELETE FROM ".$table;

				if(count($where) > 0){
					$dados = array();
				
					foreach($where as $chave => $valor){ 
						$dados[] = $chave."='".addslashes($valor)."'"; 
					}

					$sql .= " WHERE ".implode(" ".$where_cond." ", $dados);
				}

				$this->pdo->query($sql);
			}	

		}

	}
?>			