<?php
include 'header.php';
$aula_atual = 'condicionais';
?>


<body>

	<h2>CONDICIONAIS</h2>
	<hr>
	<small>Curso Básico de PHP</small>

	<h3>Selecione o produto:</h3>

	<?php

	$produtos = array(
		array(
			'nome' => 'Laptop Lenovo Ideapad Core i7 32GB',
			'estoque' => 12
		),

		array(
			'nome' => 'Laptop ASUS X441NA3350 Celeron N3350 16GB',
			'estoque' => 6
		),

		array(
			'nome' => 'Laptop HP BS013DX Core i5 8GB',
			'estoque' => 1
		),

		array(
			'nome' => 'Dell Inspiron I7373 Core i7 8GB',
			'estoque' => 0
		)

	)

		?>

	<select>
		<option>Nenhum produto selecionado</option>

		<?php foreach ($produtos as $item) { ?>

			<option <?php if ($item['estoque'] <= 0) {
				echo 'disabled';
			} ?>>
				<?php echo $item['nome']; ?>
				<?php if ($item['estoque'] <= 0) {
					echo ' (indisponivel)';
				} elseif ($item['estoque'] == 1) {
					echo '(ultima unidade)';
				} else {
					echo ' (disponivel)';
				} ?>
			</option>

		<?php } ?>

	</select>
	<?php include 'functions/bottom_index.php'; ?>


</body>

</html>