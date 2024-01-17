<?php
include 'header.php';
$aula_atual = 'loop-foreach';
?>


<body>

	<h2>LOOP FOREACH</h2>
	<hr>
	<small>Curso Básico de PHP</small>



	<?php

	$cursos = array(
		array(
			"n_alunos" => 400,
			"titulo" => "Excel do zero ao avançado",
			"url" => "#",
			"aval" => 200
		),
		array(
			"n_alunos" => 300,
			"titulo" => "Aprenda Desenvolvimento Web em HTML/CSS",
			"url" => "#",
			"aval" => 150
		),
		array(
			"n_alunos" => 280,
			"titulo" => "Programe em Python",
			"url" => "#",
			"aval" => 90
		),
		array(
			"n_alunos" => 150,
			"titulo" => "JavaScript",
			"url" => "#",
			"aval" => 50
		)
	);
	?>


	<h3>Meus Cursos</h3>

	<ul>

		<?php foreach ($cursos as $curso) { ?>
			<li>
				<a href="<?php echo $curso['url'] ?>">
					<?php echo $curso['titulo'] ?> 
				</a>
				<br>
				<?php echo $curso['n_alunos']. ' Alunos '.'/ '.$curso['aval'].' Avaliações' ?> <br>
			</li> <br>
		<?php } ?>
	</ul>

	<?php include 'functions/bottom_index.php'; ?>


</body>

</html>