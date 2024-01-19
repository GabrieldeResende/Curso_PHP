	<?php 
		include 'header.php';
		include 'functions/functions.php';
		$aula_atual = 'escopo-variaveis';
	?>


	<body>


		<h2>ESCOPO DAS VARIÁVEIS</h2>
		<hr>
		<small>Curso Básico de PHP</small>


		<h3>Escopo Global x Escopo Local</h3>

			<?php
				// variavel Global
				$num = 10;
				echo 'Variavel Global: '. $num. '<br>';
				function printNum() {
					// variavel Local
					global $num;
					$num += 5;
					echo 'Variavel Local: '. $num;
				}
			?>

			<p>
			<?php printNum(); ?>	
			</p><br>

			<p>
			<?php echo 'Variavel Global apos passar pela função: '. $num ?>	
			</p><br>
		<br><br>
		<?php include 'functions/bottom_index.php'; ?>


	</body>

</html>
