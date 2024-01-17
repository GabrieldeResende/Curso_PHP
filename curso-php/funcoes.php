	<?php 
		include 'header.php';
		include 'functions/functions.php';
		$aula_atual = 'funcoes';
	?>


	<body>


		<h2>FUNÇÕES</h2>
		<hr>
		<small>Curso Básico de PHP</small>


		<h3>Função simples sem argumento</h3>

		<?php 
			function olaMundo() {
				echo 'Ola Mundo';
				echo '<br>';
				echo 'fim da função';
			}

			olaMundo();
		?>

		<h3>Função com argumentos</h3>

		<?php 
			function adicao($num1, $num2) {
				$soma = $num1 + $num2;
				echo '<br>';
				echo $soma;
			}

			adicao(5,5);
			adicao(10, 20);
			adicao(10, 30);
		?>


		<h3>Função com argumento e valor default</h3>

		<?php 
			function olaCliente($nome = 'Cliente') {
				echo "Ola $nome, como vai?";
				echo '<br>';
			}

			olaCliente('Gabriel');
			olaCliente('Maria');
			olaCliente();
		?>


		<h3>echo ou return?</h3>

		<?php 
			function media($num1, $num2) {
				$media = ($num1 + $num2) / 2;
				return $media;
			}

			 echo media(6, 8)
		?>





		










		<?php include 'functions/bottom_index.php'; ?>


	</body>

</html>