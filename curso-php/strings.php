<?php
include 'header.php';
$aula_atual = 'strings';
?>


<body>

	<h2>STRINGS</h2>
	<hr>
	<small>Curso Básico de PHP</small>

	<h3>String é uma sequência de caracteres</h3>

	<?php $str = "Eu sou um string"; ?>
	

	<h4>Valor da variável:</h4>
	<p>
		<?php echo $str ?>
	</p>
	<br>

	<h4>Número de caracteres:</h4>
	<p>
		<?php echo strlen($str) ?>
	</p>
	<br>

	<h4>Primeiro caractere:</h4>
	<p>
		<?php echo $str[0] ?>
	</p>
	<br>

	<h4>Último caractere:</h4>
	<p>
		<?php echo $str[-1] ?>
	</p>
	<br>

	<h4>Como extrair parte de um string:</h4>
	<p>
		<?php echo substr($str, 4) ?>
	</p>

	<h3>Exemplo do IBAN - Trabalhando com Strings</h3>

	<?php
	$iban = "pt50000067263827616176433";
	$status = "Ativo";
	$senha = "45p87a06";
	?>

	<h4>Número do IBAN:</h4>
	<p>
		<?php echo $iban ?>
	</p>
	<br>


	<h4>Código do País:</h4>
	<p>
		<?php echo substr($iban, 0, 4) ?>
	</p>
	<br>

	<h4>Número da conta:</h4>
	<p>

		<?php echo substr($iban, 4) . " (Status: $status" . ")" ?>
	</p>
	<br>




	<h3>Como limpar strings</h3>

	<?php

	$email = "      resendepiece@gmail.com  ";
	$site = "https://www.linkedin.com/in/gabriel-resende-878271239/"

		?>


	<h4>Email:</h4>
	<p>
		<?php echo trim($email) ?>
	</p>
	<br>

	<h4>Site:</h4>
	<a href="<?php echo $site ?>">
		<?php echo trim($site, 'https://') ?>
	</a>
	<br>
	
	
	<h3>Agora é a sua vez</h3>
	
	<p>Use este espaço para testar novas funções com strings.</p>
	<br>
	
	<?php $nome = 'Gabriel Resende' ?>
	<?php echo $nome = 'Gabriel' ?>
	<br>
	<!-- função lcfirst deixa a primeira letra minuscula -->
	<?php echo lcfirst($nome); ?>
	<br>
	<!-- deixa todas as letras uppercase -->
	<?php echo strtoupper($nome); ?>
	<br>


	<?php include 'functions/bottom_index.php'; ?>


</body>

</html>