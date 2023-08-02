<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
	<h1>Conversor de Moedas v1.0</h1>
	<?php
		$n = $_GET["numero"];
		$d = $n / 4.79;
        $d = round($d, 2);
		echo "<p>Seus R$ $n equivalem a <strong>U$ $d</strong></p>";
		echo "<p>*<strong>Cotação fixa de R$4,79(02/08/2023)</strong> informada diretamente no código.</p>";
	?>
	<a href="javascript:history.go(-1)"><input type="submit" value="Voltar"></a>
    </section>
</body>
</html>