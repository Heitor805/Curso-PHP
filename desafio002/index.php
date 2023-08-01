<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 02</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <h1>Trabalhando com números aleatórios</h1>
        <p>Gerando um número aleatório entre 0 e 100...</p>
            <?php 
                 $n = rand(1, 100);
                 echo "<p>O valor gerado foi <strong>$n</strong></p>";
            ?>
            <input type="submit" value="\u Gerar Outro">
    </section>
</body>
</html>