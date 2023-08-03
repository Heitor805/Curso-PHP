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
	<h1>Conversor de Moedas v1.0</h1>
	<?php
		$n = $_GET["numero"] ?? 0;
		$d = $n / 4.79;
		echo "<p>Seus R\$" . number_format($n, 2, ",", ".") . " equivalem a <strong>U\$" . number_format($d, 2, ",", ".") . "</strong></p>";
		// number_format(o número, casas decimais, com separador primário de vírgula, e separador secundário de .)
		// Formatação de moedas com internacionalização
		//$padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
		// tudo oq colocar nessa var será um padrão pt-br
		//echo "<p>Seus R\$ " . numfmt_format_currency($padrao, $n, "BRL") . " equivalem a <strong>U\$ " . numfmt_format_currency($padrao, $d, "USD") . " </strong></p>";
		echo "<p>*<strong>Cotação fixa de R$4,79(02/08/2023)</strong> informada diretamente no código.</p>";
		// Esse modelo já cuida da internacionalização do site para como um estrangeiro vai interpretar o código usando biblioteca intl (International PHP), pode não funcionar com xampp pq a biblioteca está desligada
	?>
	<button onclick="javascript:window.location.href='index.html'">&#x2B05; Voltar</button>
    </section>
</body>
</html>