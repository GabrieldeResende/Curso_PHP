<?php
include 'header.php';
$aula_atual = 'include-require';
?>


<body>


	<h2>Include e Require</h2>
	<hr>
	<small>Curso Básico de PHP</small>




	<h3>Include</h3>

	<?php
	include 'file-to-include.php'
		?>


	<p>
		<?php echo $primeiro_nome ?>
		<?php echo celsiusToFahrenheit(40) ?>
	</p>
	<br>




	<h3>Componente galeria de fotos 1 </h3>

	<?php

	$photoGallery = array(

		'img/prato_1.jpg',
		'img/prato_2.jpg',
		'img/prato_3.jpg',
		'img/prato_4.jpg'

	);

	?>
	
		<?php
		include 'components/galery001.php'
			?>
	<h3>Componente galeria de fotos 2 </h3>

	<?php

	$photoGallery = array(

		'img/prato_5.jpg',
		'img/prato_6.jpg',
		'img/prato_7.jpg',
		'img/prato_8.jpg'

	);

	?>

	<?php
	include 'components/galery001.php'
		?>

	<?php include 'functions/bottom_index.php'; ?>


</body>

</html>