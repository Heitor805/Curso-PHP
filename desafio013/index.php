<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Desafio013 </title>
    <link rel="stylesheet" href="../style/style.css">
	<style>
		img.nota {
			height: 70px;
			margin: 5px;
		}
	</style>
</head>
<body>
	<?php 
		$total = $_GET['total']??0;
	?>
    <main>
	<h1>Caixa Eletrônico</h1>
	<form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
		<label for="total">Qual valor você deseja sacar? (R$)*</label>
		<input type="number" name="total" id="total" value="<?=$total?>" step="5">
		<p style="font-size: 0.65em;">*Notas disponíveis: R$100, R$50, R$20 e R$5</p>
		<input type="submit" value="Sacar">
	</form>
    </main>
	<section id="resultado">
		<?php
			echo "<h2>Saque de R\$$total realizado</h2>";
			echo "<p>O caixa eletrônico vai te entregar as seguintes notas:</p>";
			$cem = intdiv($total, 100);
			// $cem = floor($total, 100);
			// floor é uma função que sempre arredonda para baixo
			$rcem = $total % 100;
			//$rcem %= 100
			// "%=" = uma conta de "%" é igual o -= ou += 
			$cinquenta = intdiv($rcem, 50);
			$rcinquenta = $rcem % 50;
			$dez = intdiv($rcinquenta, 10);
			$rdez = $rcinquenta % 10;
			$cinco = intdiv($rdez, 5);
		?>
		<ul>
			<li><img src="imagens/100-reais.jpg" alt="cemreais" class="nota"> x<?=$cem?></li>
			<li><img src="imagens/50-reais.jpg" alt="cinquentareais" class="nota"> x<?=$cinquenta?></li>
			<li><img src="imagens/10-reais.jpg" alt="dezreais" class="nota"> x<?=$dez?></li>
			<li><img src="imagens/5-reais.jpg" alt="cincoreais" class="nota"> x<?=$cinco?></li>
		</ul>
	</section>
</body>
</html>