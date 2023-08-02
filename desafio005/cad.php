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
	<h1>Analisador de Número Real</h1>
	<?php
		$n = $_GET["numero"];
		$i = number_format($numero, 0)
		$f = $n - $i;
		echo "<p>Analisando o número <strong>$n</strong> informado pelo usuário: equivalem a <strong>U$ $d</strong></p>";
		<ul>
			echo "<li>A parte inteira do número é <strong>$i</strong></li>";
			echo "<li>A parte fracionada do número é <strong>$f</strong></li>";
		</ul>
	?>
	<a href="javascript:history.go(-1)"><input type="submit" value="Voltar"></a>
    </section>
</body>
</html>