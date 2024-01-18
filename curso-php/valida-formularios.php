<?php
include 'header.php';
$aula_atual = 'valida-formularios';
?>

<?php
function cleanInput($data)
{
	$cleanData = trim($data);
	$cleanData = stripslashes($cleanData);
	$cleanData = htmlspecialchars($cleanData);

	return $cleanData;
}
?>

<body>


	<h2>Formulários</h2>
	<hr>
	<small>Curso Básico de PHP</small>

	<h3>Envie seus dados</h3>

	<?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$nome = $_POST['nome'];
		$email = $_POST['email'];
		if ($nome == "") {
			$erroNome = ' *O nome é obrigatorio!';
		} else if ($email == "") {
			$erroEmail = '*O email é obrigatorio!';
		} else if (filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
			$erroEmail = '* Email invalido!';
		} else {
			$nome = cleanInput($nome);
			$email = cleanInput($email);

			$server = 'localhost_';
			$user = 'root';
			$password = 'root';
			$dbName = 'cursophp';
			$port = '3306';

			$db_connect = new mysqli($server, $user, $password, $dbName, $port);

			if ($db_connect->connect_error == true) {
				$msgEnvio  = "Não foi possivel enviar o formulario";
			} else {
				$sql = "INSERT INTO clientes(nome,email) VALUES ('$nome', '$email')";

				if ($db_connect->query($sql) == true) {
					$msgEnvio  = "Formulario enviado com sucesso!";
					$nome = NULL;
					$email = NULL;
				} else {
					$msgEnvio  = "Não foi possivel enviar o formulario";
				}
			}
		}
	}
	?>

	<form action="valida-formularios.php" method="post">

		Nome: *
		<br>
		<input type="text" name="nome" class="field" value="<?php echo $nome; ?>">
		<br>
		<div class="erro-form">
			<?php echo $erroNome ?>
		</div>
		<br>

		E-mail: *
		<br>
		<input type="text" name="email" class="field" value="<?php echo $email; ?>">
		<br>
		<div class="erro-form">
			<?php echo $erroEmail ?>
		</div>
		<br>

		<input type="submit" name="submit" class="submit"><br>
		<div class="sucesso-form">
			<?php echo $msgEnvio ?>
		</div>



		<h3>Confirmaçao</h3>
		<p>
			<?php echo $nome ?>
			<?php echo '<br>' ?>
			<?php echo $email ?>
		</p>



















		<?php include 'functions/bottom_index.php'; ?>


</body>

</html>