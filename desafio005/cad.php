<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <section>
	<h1>Analisador de Número Real</h1>
	<?php
		$n = $_GET["numero"] ?? 0;
		$i = (int) $n;
		$f = $n - $i;
		echo "<p>Analisando o número <strong>". number_format($n, 3, ",", ".") ."</strong> informado pelo usuário: </p>";
		echo "<ul>
			<li>A parte inteira do número é <strong>" . number_format($i, 0, ",", ".") . "</strong></li>
			<li>A parte fracionada do número é <strong>" . number_format($f, 3, ",", ".") . "</strong></li>
		</ul>"
	?>
	<button onclick="javascript:window.location.href='index.html'">&#x2B05; Voltar</button>
    </section>
</body>
</html>