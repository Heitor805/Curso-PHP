<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Desafio009 </title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
	<?php 
		$valor1 = $_GET['n1']??1;
        $valor2 = $_GET['n2']??1;
        $peso1 = $_GET['p1']??1;
        $peso2 = $_GET['p2']??1;
	?>
    <main>
	<h1>Média Aritméticas</h1>
	<form action="<?=$_SERVER['PHP_SELF']?>" method="get">
		<label for="v1">1° Nota</label>
		<input type="number" name="n1" id="n1" value="<?=$valor1?>" required>
        <label for="p1">1° Peso</label>
		<input type="number" name="p1" id="p1" min="1" value="<?=$peso1?>" required>
        <label for="v2">2° Nota</label>
		<input type="number" name="n2" id="n2" value="<?=$valor2?>" required>
        <label for="p2">2° Peso</label>
		<input type="number" name="p2" id="p2" min="1" value="<?=$peso2?>" required>  
		<input type="submit" value="Calcular Médias">		
	</form>
</main>
    <section id="resultado">
        <h2>Cálculo das Médias</h2>
        <?php
            echo "<p>Analisando os valores $valor1 e $valor2:</p>";
            $simples = ($valor1 + $valor2) / 2;
            $ponderada = ($valor1*$peso1 + $valor2*$peso2) / ($peso1 + $peso2);
            echo "<ul>
                <li>A <strong>Média Aritmética Simples</strong> entre os valores é igual a " .  number_format($simples, 2, ",", ".") . ".</li>
                <li>A <strong>Média Aritmética Ponderada</strong> com pesos $peso1 e $peso2 é igual a " . number_format($ponderada, 2, ",", ".") . ".</li>
            </ul>";
        ?>
    </section>
</body>
</html>