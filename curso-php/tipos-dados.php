<?php
include 'header.php';
$aula_atual = 'tipos-dados';
?>


<body>

	<h2>Tipos de Dados</h2>
	<hr>
	<small>Curso Básico de PHP</small>
	<br>

	<h3>Função var_dump</h3>

	<?php
	// string entre aspas simples ou duplas
	$nome = 'Gabriel';
	// int ou float sao numericos
	$saldo = 965.35;
	//booleano True ou False
	//Array conjunto de dados
	//object criado atraves de classes
	// Null é a ausencia de valor
	?>

	<h4>Tipo da variável $nome: </h4>
	<p>
		<?php var_dump($nome) ?>
	</p>

	<br>

	<h4>Tipo da variável $saldo: </h4>
	<p>
		<?php var_dump($saldo) ?>
	</p>







	<?php include 'functions/bottom_index.php'; ?>


</body>

</html>