<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Desafio008 </title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
	<?php 
		$valor1 = $_GET['n1'] ?? 0;
	?>
    <main>
	<h1>Informe um número</h1>
	<form action="<?=$_SERVER['PHP_SELF']?>" method="get">
		<label for="v1">Número</label>
		<input type="number" name="n1" id="n1" value="<?=$valor1?>">
		<input type="submit" value="Calcular Raízes">		
	</form>
</main>
    <section id="resultado">
        <h2>Resultado final</h2>
        <?php
            echo "<p>Analisando o <strong>número $valor1</strong>, temos:</p>";
            $quadrada = sqrt($valor1);
            $cubica = $valor1 ** (1/3);
            echo "<ul>
                <li>A sua raiz quadrada é <strong>" . number_format($quadrada, 3, ",", ".") . "</strong></li>
                <li>A sua raiz cúbica é <strong>" . number_format($cubica, 3, ",", ".") . "</strong></li>
            </ul>";
        ?>
    </section>
</body>
</html>