	<?php 
		include 'header.php';
		include 'functions/functions.php';
		$aula_atual = 'data-hora';
	?>


	<body>


		<h2>Data e Hora</h2>
		<hr>
		<small>Curso Básico de PHP</small>

		
		<h3>Epoch</h3>

		<p>Unix Epoch -> 01 Jan 1970 00:00:00 GMT</p><br>

		

		<h3>Função time - segundos desde o Epoch (formato unix timestamp)</h3>

		<p>

			<?php
				$agora = time();
				echo date("d/m/Y", $agora);
			?>
			
		</p>
		<br>

		<h3>Função mktime</h3>

			<?php
				$nascimento = mktime(0,0,0,12,06,1998);
				echo date("d/m/Y", $nascimento)
				
				
			?>

		<p>

		</p>
		<br>

		<h3>Função strtotime</h3>

			<?php
				$outraData = strtotime("December 06 1998");
				$hoje = strtotime("now + 4weeks monday");
				echo date("d/m/Y", $outraData);
				echo '<br>';
				echo date("d/m/Y", $hoje);
			?>

		<p>

		</p>
		<br>


		<h3>Função date</h3>

			<?php
				echo date("d/M/y h i s ", $outraData);
			?>

		<p>

		</p>
		<br>

		<h3>Fuso horário</h3>

			<?php
				date_default_timezone_set("America/Sao_Paulo");
				echo date_default_timezone_get()
			?>			

		<p>

		</p>
		<br>


		<h3>Cálculos com data e hora</h3>

			<?php
				$dataEntrega = strtotime("18 jan 2024");
				$dataEsperada = strtotime("16 jan 2024");
				if ($dataEntrega > $dataEsperada) {
					$atraso = ($dataEntrega - $dataEsperada) / 60 /60 /24; 
					echo "Produto entregue com atraso de ". $atraso. " dias";
				} else {
					echo "Produto entregue no prazo";
				}
			?>

		<p>

		</p>
		<br>


		<h3>Tabela de caracteres da função date</h3>

		


		<?php include 'tabela-date.php'; ?>


		<?php include 'functions/bottom_index.php'; ?>


	</body>

</html>