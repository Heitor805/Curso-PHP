index.php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 02</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <section>
        <h1>Trabalhando com números aleatórios</h1>
        <p>Gerando um número aleatório entre 0 e 100...</p>
            <?php 
                 $n = rand(1, 100);
		        // rand() é o mais usado porém é um algoritmo defasado
		        $n = mt_rand(1, 100);
		        //mt_rand() é uma aalternativa mais confiável, sempre usar mt_rand
		        // a partir do php 7.1, rand() é um simples apontamento para mt_rand(), ou seja usam o mesmo algoritmo
		        //random_int() gera números aleatórios já criptografados é necessário quando se trabalha com segurança
                 echo "<p>O valor gerado foi <strong>$n</strong></p>";
            ?>
            <button onclick="javascript:document.location.reload()">&#x1F504; Gerar outro</button>
    </section>
</body>
</html>