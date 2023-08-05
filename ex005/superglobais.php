<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Exercícios PHP </title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <main>
        <pre>
	<!-- O pre é bom pq ele dá uma arrumada quando precisa colocar muitas informações na tela -->
        	<?php
            setcookie("dia-da-semana", "SEGUNDA", time() + 3600);
            // Criou um cookie, colocou como segunda e o tempo q irá durar sendo 3600 segundos, importante colocar como 1ª declaração do script
            session_start();
            $_SESSION["teste"] = "FUNCIONOU";
            echo "<h1>Superglobal";
            var_dump($_GET);
            echo "<h1>Superglobal POST</h1>";
            var_dump($_POST);
            // LEMBRAR AMBOS OS MÉTODOS GET E POST OS DADOS SÃO VISÍVEIS, CUIDADO
            echo "<h1>Superglobal REQUEST</h1>";
            var_dump($_REQUEST);
            // Por request irá mostrar ambos get e post, irá englobar como um
            //OUTRAS SUPERGLOBAIS:
            echo "<h1>Superglobal COOKIE</h1>";
            var_dump($_COOKIE);
            //$_COOKIE para cookies
            //$_FILES pegar arquivos
            echo "<h1>Superglobal SESSION</h1>";
            var_dump($_SESSION);
            //$_SESSION variáveis de sessão não sejam perdidas na transição de páginas
            //$_ENV de environment variáveis de ambiente do servidor, não irá funcionar nesse caso pq tem variáveis ambientais mas não irá mostrar
            echo "<h1>Superglobal ENV</h1>";
            var_dump($_ENV);
            //$_SERVER para servidores, muito útil
            echo "<h1>Superglobal SERVER</h1>";
            var_dump($_SERVER);
            //$GLOBALS (sem _) engloba tudo mas é confuso e consome muitos recursos
            echo "<h1>Superglobal GLOBALS</h1>";
            var_dump($GLOBALS);
            ?>
	</pre>
    </main>
</body>
</html>