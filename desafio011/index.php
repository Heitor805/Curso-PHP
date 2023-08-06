<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Desafio011 </title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
	<?php 
		$preco = $_GET['pre']??0;
        $reajuste = $_GET['rea']??0;
	?>
    <main>
	<h1>Reajustador de Preços</h1>
	<form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
		<label for="pre">Preço do Produto (R$)</label>
		<input type="number" name="pre" id="pre" value="<?=$preco?>" step="0.01">
        <label for="rea">Qual será o percentual de reajuste? (<strong><span id="irea">?</span>%</strong>)</label>
		<input type="range" name="rea" id="rea" min="0" max="100" value="50" oninput="mudaValor()">
		<input type="submit" value="Reajuste">
	</form>
    </main>
	<section id="resultado">
		<h2>Resultado do Reajuste</h2>
		<?php
			$val = $preco * $reajuste / 100;
			$res = $preco + $val;
			echo "<p>O produto que custava R\$" .  number_format($preco, 2, ",", ".") . " com <strong>$reajuste% de aumento</strong> vai passar a custar <strong>R\$" .  number_format($res, 2, ",", ".") . "</strong> a partir de agora.</p>";
		?>
	</section>
	<script>
		mudaValor()
		function mudaValor() {
			irea.innerText = rea.value;
		}
	</script>
</body>
</html>