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
		$valor2 = $_GET['n2']??1;
	?>
    <main>
	<h1>Analisador de uma Divisão</h1>
	<form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
		<label for="n1">Dividendo</label>
		<input type="number" name="n1" id="n1" min="0" value="<?=$valor1?>">
		<label for="n2">Divisor</label>
		<input type="number" name="n2" id="n2" min="1" value="<?=$valor2?>">
		<input type="submit" value="Analisar">		
	</form>
</main>
    <section id="resultado">
        <h2>Estrutura da Divisão</h2>
        <?php
            $resultado = intdiv($valor1, $valor2);
            $resto = $valor1 % $valor2;
        ?>
            <table class="divisao">
                <tr>
                    <td><?=$valor1?></td>
                    <td><?=$valor2?></td>
                </tr>
                <tr>
                    <td><?=$resto?></td>
                    <td><?=$resultado?></td>
                </tr>
            </table>
    </section>
</body>
</html>