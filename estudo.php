<html>
	<body>
		<h1>CIDADES E NOMES:</h1>
			<?php
				$db = mysqli_connect("localhost","root","bel120508","sagha");
	    		$sql = "select *from hospital";
	    		$result = mysqli_query($db, $sql) or die("Erro de conexão: ".mysqli_error());
	    		while($row = mysqli_fetch_assoc($result)){
	        		echo 'Cidade: '.$row['cidade'].'<br>';
	        		echo 'Nome: '.$row['nome'].'<br>-----<br>'; 
	    		}
			?>
	</body>
</html>


