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
        <h1>Resultado Final</h1>
        <?php 
            $n = $_GET["numero"] ?? 0;
		    // essas 2 interrogações quer dizer q se um valor não for puxado irá usar o valor 0
            $n1 = $n - 1;
            $n2 = $n + 1;
            echo "<p>O número escolhido foi <strong>$n</strong></p>";
            echo "O seu <i>antecessor</i> é $n1";
		    echo "<br>O seu <i>antecessor</i> é ". $n-1 ." ";
            echo "<br>O seu <i>sucessor</i> é $n2";
		    echo "<br>O seu <i>sucessor</i> é ". $n+1 ." ";
        ?>
	<button onclick="javascript:window.location.href='index.html'">&#x2B05; Voltar</button>
    </section>
</body>
</html>