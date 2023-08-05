<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Desafio010 </title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
	<?php 
		$ano = $_GET['ano']??0;
        $idade = $_GET['ida']??0;
	?>
    <main>
	<h1>Calculando a sua idade</h1>
	<form action="<?php=$_SERVER['PHP_SELF']?>" method="get">
		<label for="ano">Em que ano você nasceu?</label>
		<input type="number" name="ano" id="ano" value="<?=$ano?>">
        <label for="ida">Quer saber sua idade em que ano? (Atualmente estamos em <?php= $atu=date('Y')?>)</label>
		<input type="number" name="ida" id="ida" value="<?=$idade?>">
		<input type="submit" value="Qual será minha idade?">		
	</form>
    </main>
	<section id="resultado">
		<h2>Resultado</h2>
		<?php
			$res = $idade - $ano;
			echo "<p>Quem nasceu em $ano vai ter <strong>$res anos</strong> em $idade</p>";
		?>
	</section>
</body>
</html>