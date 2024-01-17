<?php 
		include 'header.php';
		$aula_atual = 'booleans';
	?>


	<body>

		<h2>BOOLEANS</h2>
		<hr>
		<small>Curso Básico de PHP</small>

		<!-- = atribuição/ == igualdade/ === identico valor e dados/ !=(<>) diferente ou negação/ !== não é identico/ > e >= maior e maior igual/ < e <= menor e menor igual -->

		<h3>True ou False?</h3><br>
		<?php $numero1 = 30 > 20 ?>
		<?php $numero2 = 30 < 20 ?>
		<?php $numero3 = 30 == 20 ?>
		<?php $numero4 = 30 != 20 ?>
		<p>
			<?php var_dump($numero1) ?>
			<?php var_dump($numero2) ?>
			<?php var_dump($numero3) ?>
			<?php var_dump($numero4) ?>
		</p>

		<?php include 'functions/bottom_index.php'; ?>
	</body>

</html>