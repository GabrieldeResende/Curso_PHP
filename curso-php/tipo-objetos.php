<?php 
		include 'header.php';
		$aula_atual = 'tipo-objetos';
	?>


	<body>

		<h2>OBJETOS</h2>
		<hr>
		<small>Curso Básico de PHP</small>



		<h3>Propriedades</h3>

		<?php
			class carro {
				private $ano;
				private $cor;
				private $modelo;
				private $cpfDono;

				function __construct($ano, $cor, $modelo, $cpfDono){
					$this->ano = $ano;
					$this->cor = $cor;
					$this->modelo = $modelo;
					$this->cpfDono = $cpfDono;
				}

				public function getInfo(){
					echo 'Ano: '. $this->ano. '<br>';
					echo 'cor: '. $this->cor. '<br>';
					echo 'modelo: '. $this->modelo. '<br>';
				}

				public function getCpf() {
					echo $this->cpfDono.'<br>';
				}
				public function mudarDono($novoCpf) {
					echo $this->cpfDono = $novoCpf;
				}
			}

			$carro1 = new carro(2018, 'vermelho', 'Gol', '123.456.789-11');
		?>

		<h4>Propriedades do Objeto Carro1: </h4>
		<pre>
			<?php echo $carro1->getInfo() ?>
			
		</pre>

		<h3>Métodos</h3>

		<h4>Dono do Carro1: </h4>
		<p>
		<?php echo $carro1->getCpf() ?>
		</p>
		<br>
		
		<h4>---------- Troca do dono do carro ----------</h4>

		<br>

		<h4>Novo Dono do Carro1: </h4>
		<p>
		<?php echo $carro1->mudarDono('200.300.400-55') ?>
		</p>




		

		
	






		<?php include 'functions/bottom_index.php'; ?>


	</body>

</html>