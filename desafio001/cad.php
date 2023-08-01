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
        <h1>Resultado Final</h1>
        <?php 
            $n = $_GET["numero"];
            $n1 = $n - 1;
            $n2 = $n + 1;
            echo "<p>O número escolhido foi <strong>$n</strong></p>";
            echo "<p>O seu <i>antecessor</i> é $n1</p>";
            echo "<p>O seu <i>sucessor</i> é $n2</p>";
        ?>
        <input type="submit" value="\u{2B05} Voltar">
    </section>
</body>
</html>