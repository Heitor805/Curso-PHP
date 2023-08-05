index.php
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Desafio007 </title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
	<?php 
		$valor1 = $_GET['n1']??0;
	?>
    <main>
	<h1>Informe seu salário</h1>
	<form action="<?php=$_SERVER['PHP_SELF'] ?>" method="get">
		<label for="v1">Salário (R$)</label>
		<input type="number" name="n1" id="n1" value="<?=$valor1?>">
		<p>Considerando o salário mínimo de <strong>R$1.320,00</strong></p>
		<input type="submit" value="Calcular">		
	</form>
</main>
    <section id="resultado">
        <h2>Resultado Final</h2>
        <?php
            $resultado = intdiv($valor1, 1320);
            $resto = $valor1 % 1320;
            echo "<p>Quem recebe um salário de R\$$valor1 ganha <strong>$resultado salários mínimos</strong> + R\$ $resto.</p>";
        ?>
    </section>
</body>
</html>