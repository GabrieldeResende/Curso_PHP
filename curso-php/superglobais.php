	<?php 
		include 'header.php';
		include 'functions/functions.php';
		$aula_atual = 'variaveis-superglobais';
	?>


	<body>


		<h2>Variáveis Superglobais</h2>
		<hr>
		<small>Curso Básico de PHP</small>



		<h3>$_SERVER</h3>

		<pre><?php var_dump($_SERVER) ?></pre>



		<h3>$GLOBALS</h3>

		<?php

		$msg = 'hello world';
		$bye = 'bye bye world';

		function mensagem() {
			global $msg;
			echo $msg. '<br>';
		}
		function adeus() {
			echo $GLOBALS['bye'];
		}

		mensagem();
		adeus();
		?>

		<!-- <pre><?php var_dump($GLOBALS['msg']) ?></pre>
		<pre><?php var_dump($GLOBALS['bye']) ?></pre> -->


		










		<?php include 'functions/bottom_index.php'; ?>


	</body>

</html>