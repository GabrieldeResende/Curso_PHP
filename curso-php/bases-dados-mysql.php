	<?php 
		include 'header.php';
		include 'functions/functions.php';
		$aula_atual = 'base-dados-mysql';
	?>


	<body>


		<h2>Bases de Dados MySQL</h2>
		<hr>
		<small>Curso Básico de PHP</small>

		<!-- <?php phpinfo() ?> -->



		<h3>MySQLi</h3>

		<?php 
			$server ='localhost_';
			$user = 'root';
			$password = 'root';
			$dbName = 'cursophp';
			$port = '3306';

			$db_connect = new mysqli($server, $user, $password, $dbName, $port);

			if ($db_connect-> connect_error == true) {
				echo "Falha de conexão" . $db_connect-> connect_error;
			} else {
				echo "Conexão feita com sucesso". '<br>';

				$sql = "INSERT INTO clientes(nome,email) VALUES ('Maria', 'maria@gmail.com')";

				 if ($db_connect->query($sql) == true) {
					echo "Dados inseridos com sucesso!";
				 } else {
					echo "Falha no envio dos dados";
				 }
			}
		?>

		<?php include 'functions/bottom_index.php'; ?>


	</body>

</html>