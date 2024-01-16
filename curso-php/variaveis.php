<?php
include 'header.php';
$aula_atual = 'variaveis';
?>


<body>

	<h2>VARIÁVEIS E CONSTANTES</h2>
	<hr>
	<small>Curso Básico de PHP</small>
	<br>

	<h3>Apresentar valor de variáveis</h3>

	<?php
	// $ indica o uso de variaveis 
	$nome = 'Gabriel';
	$saldo = 670.50;
	// defina(nome da constante, valor da constante) indica o uso de uma constante
	define('cpf', '070.338.351-59')
	?>

	<h4>Nome: </h4>
	<p>
		<?php echo $nome ?>
	</p>

	<br>

	<h4>CPF: </h4>
	<p>
		<?php echo cpf ?>
	</p>

	<br>

	<h4>Saldo: </h4>
	<p>
		<?php echo $saldo ?>
	</p>


	<br>

	<h4>Mensagem: </h4>
	<p>
		<?php echo 'Ola ', $nome, ' seu saldo é: ', $saldo ?>
	</p>







	<?php include 'functions/bottom_index.php'; ?>


</body>

</html>