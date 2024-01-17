<?php
include 'header.php';
$aula_atual = 'arrays';
?>


<body>

	<h2>ARRAYS</h2>
	<hr>
	<small>Curso Básico de PHP</small>


	<h3>Meus Cursos</h3>

	<?php $cursos = array(
		array(
			"numeroAlunos" => 400,
			"titulo" => "PHP completo",
			"url" => "http://",
			"avaliacoes" => 200
		),
		array(
			"numeroAlunos" => 300,
			"titulo" => "Java completo",
			"url" => "http://",
			"avaliacoes" => 120
		),
		array(
			"numeroAlunos" => 100,
			"titulo" => "JavaScript completo",
			"url" => "http://",
			"avaliacoes" => 100
		)
	) ?>

	<h4>Conteúdo do Array: </h4>
	<p>
		<?php ?>
	</p>
	<br>


	<h3>Informação do Curso</h3>

	<h4>Título: </h4>
	<p>
		<?php echo $cursos[0]['titulo'] ?>
	</p>
	<br>
	<h4>Numero de Alunos: </h4>
	<p>
		<?php echo $cursos[0]['numeroAlunos'] ?>
	</p>
	<br>

	<h4>Número de Avaliações: </h4>
	<p>
		<?php echo $cursos[0]['avaliacoes'] ?>
	</p>
	<br>

	<h4>URL: </h4>
	<p>
		<?php echo $cursos[0]['url'] ?>
	</p>
	<br>

	<h4>URL da foto: </h4>
	<p>
		<?php ?>
	</p>
	<br>


	<h3>Agora é a sua vez</h3>

	<p>Crie um Array e solte as suas informações em sequência. Pesquise também funções que podem ser aplicadas neste
		tipo de dados.</p>
	<br>






	<?php include 'functions/bottom_index.php'; ?>


</body>

</html>