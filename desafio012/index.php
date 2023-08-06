<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Desafio012 </title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
	<?php 
		$total = $_GET['total']??0;
	?>
    <main>
	<h1>Calculador de Tempo</h1>
	<form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
		<label for="total">Qual é o total de segundos?</label>
		<input type="number" name="total" id="total" value="<?=$total?>">
		<input type="submit" value="Calcular">
	</form>
    </main>
	<section id="resultado">
		<h2>Totalizando tudo</h2>
		<?php
			$semanas = intdiv($total, 604800);
			$rsemanas = $total % 604800;
			$dias = intdiv($rsemanas, 86400);
			$rdias = $rsemanas % 86400;
			$horas = intdiv($rdias, 3600);
			$rhoras = $rdias % 3600;
			$minutos = intdiv($rhoras, 60);
			$rminutos = $rhoras % 60;
			$segundos = $rminutos % 60;
			echo "<p>Analisando o valor que você digitou <strong>" . number_format($total, 0, ",", ".") .  " segundos</strong> equivalem a um total de:</p>
			<ul>
				<li>$semanas semanas</li>
				<li>$dias dias</li>
				<li>$horas horas</li>
				<li>$minutos minutos</li>
				<li>$segundos segundos</li>
			</ul>";
		?>
	</section>
</body>
</html>