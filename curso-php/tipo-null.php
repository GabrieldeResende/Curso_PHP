	<?php 
		include 'header.php';
		include 'functions/functions.php';
		$aula_atual = 'tipo-null';
	?>


	<body>


		<h2>NULL</h2>
		<hr>
		<small>Curso Básico de PHP</small>

		<h3>NULL = Ausência de valor</h3>

		<?php $posts = '';

		var_dump($posts);

		echo '<br>'; 
		echo '<br>';

		if ($posts == null) {
			echo 'A variavel é igual a null';
		} else {
			echo 'A variavel nao é null';
		}
		?>


		<h3>Resultado da pesquisa</h3>
		<?php include 'functions/bottom_index.php'; ?>


	</body>

</html>