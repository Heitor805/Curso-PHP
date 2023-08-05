<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Exercício PHP </title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <!-- Quando se usa arquivos autoalimentaveis é importante incluir:-->
    <!-- Capturando os dados do formulário: -->
    <?php
    $valor1 = $_GET['v1'] ?? 0;
    $valor2 = $_GET['v2'] ?? 0;
    ?>
    <main>
        <!-- Anteriormente usavamos o botão enviar para enviar o form para o arquivo php q mostra os resultados, e um botão de voltar ak irá usar um arquivo php retroalimentado
	<h1>Somador de Valores</h1>-->
        <form action="<?php=$_SERVER['PHP_SELF'] ?>" method="get">
            <!-- por questões de segurança é melhor não colocar action="index.php" se autoreferenciando-->
            <!--É possível substituir echo por "=" e não precisa de ; no final-->
            <label for="v1">Valor 1:</label>
            <input type="number" name="v1" id="v1" value="<?= $valor1 ?>">
            <label for="v2">Valor 2:</label>
            <input type="number" name="v2" id="v2" value="<?= $valor2 ?>">
            <input type="submit" value="Somar">
        </form>
    </main>
    <section id="resultado">
        <h2>Resultado da Soma</h2>
        <?php
        $soma = $valor1 + $valor2;
        echo "<p>O resultado da soma entre $valor1 e $valor2 <strong>é: $soma.</strong></p>";
        ?>
    </section>
</body>
</html>