<?php 
		include 'header.php';
		$aula_atual = 'loops-for-while';
	?>


	<body>

		<h2>LOOPS WHILE e FOR</h2>
		<hr>
		<small>Curso Básico de PHP</small>

		<h3>Selecione o ano de nascimento:</h3>

		<?php $anoAtual = date('Y');
			$ano = $anoAtual
		?>

		<select>
			<option>Selecione o ano</option>

			<?php while ($ano >= 1980) { ?>

				<option>
					<?php echo $ano; ?>
				</option>
				<?php $ano -= 1; ?>

			<?php } ?>
		</select>

		<h3>Selecione o ano estimado de aposentadoria:</h3>

		<select>
			<option>Selecione o ano</option>
				<?php for ($ano = $anoAtual; $ano <= 2050; $ano ++){ ?>

					<option>
						<?php echo $ano ?>
					</option>
				<?php } ?>
		</select>

			

		<h3>Agora é a sua vez.</h3>

		<p>Use o loop for ou while para apresentar os anos em que vão haver Copa do mundo e Olímpiadas, até 2050.</p>

		<h4>Anos de Copa do Mundo: </h4>
		<ul>
				<?php for ($ano = 2022; $ano <= 2050; $ano += 4){ ?>

					<li>
						<?php echo $ano ?>
					</li>
				<?php } ?>
		</ul>
		<br>

		<h4>Anos de Olimpíadas: </h4>
		<ul>
				<?php for ($ano = $anoAtual; $ano <= 2050; $ano += 4){ ?>

					<li>
						<?php echo $ano ?>
					</li>
				<?php } ?>
		</ul>
		<br>

		<?php include 'functions/bottom_index.php'; ?>

	</body>

</html>