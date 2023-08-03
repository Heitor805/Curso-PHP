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
	<h1>Conversor de Moedas v2.0</h1>
	<?php
		$inicio = date("m-d-Y", strtotime("- 7 days"));
		$fim = date("m-d-Y");
		$url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\'' .$fim. '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

		$dados = json_decode(file_get_contents($url), true);
		// o true coloca dentro de um array e o false dentro de um objeto	

		$cotacao = $dados["value"][0]["cotacaoCompra"];

		$n = $_GET["numero"];
		$d = $n / $cotacao;

		//$padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
		//echo "<p>Seus R\$ " . numfmt_format_currency($padrao, $n, "BRL") . " equivalem a <strong>U\$ " . numfmt_format_currency($padrao, $d, "UDS") . " </strong></p>";
		echo "<p>Seus R$ $n equivalem a <strong>U$ " . number_format($d, 2, ",", ".") . "</strong></p>";
		echo "<p>*Cotação obtida diretamente do site do <strong><a href='https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/aplicacao#!/recursos/CotacaoDolarPeriodo#eyJmb3JtdWxhcmlvIjp7IiRmb3JtYXQiOiJqc29uIiwiJHRvcCI6MSwiZGF0YUluaWNpYWwiOiIwNy0yNy0yMDIzIiwiZGF0YUZpbmFsQ290YWNhbyI6IjA4LTAzLTIwMjMiLCIkb3JkZXJieSI6IgQyBCBkZXNjIn0sInByb3ByaWVkYWRlcyI6WzAsMl19'> Banco Central do Brasil</a></strong></p>";
	?>
	<button onclick="javascript:window.location.href='index.html'">&#x2B05; Voltar</button>
    </section>
</body>
</html>