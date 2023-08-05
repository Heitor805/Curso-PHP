<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Desafio006 </title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
	<?php 
		$valor1 = $_GET['n1']??0;
		$valor2 = $_GET['n2']??0;
	?>
    <main>
	<h1>Analisador de uma Divisão</h1>
	<form action="<?php=$_SERVER['PHP_SELF'] ?>" method="get">
		<label for="v1">Dividendo</label>
		<input type="number" name="n1" id="n1" value="<?=$valor1?>">
		<label for="v2">Divisor</label>
		<input type="number" name="n2" id="n2" value="<?=$valor2?>">
		<input type="submit" value="Analisar">		
	</form>
</main>
    <section id="resultado">
        <h2>Estrutura da Divisão</h2>
        <?php
            $resultado = intdiv($valor1, $valor2);
            $resto = $valor1 % $valor2;
            echo "<table>$valor1 $valor2 $resultado $resto</table>";
        ?>
    </section>
</body>
</html>