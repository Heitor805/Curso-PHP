<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Exemplo de PHP</h1>
    <?php 
        date_default_timezone_set("America/Sao_Paulo");
        echo "Hoje é dia " . date("d/M/Y");
        echo " e a hora atual é " . date("G:i:s");
        /* O horário não está certo, pq está usando um horário CET, q é o horário q está no servidor, para colocar a data atual é preciso setar no comando como na linha 11 */
        /* procurador arquivo php.ini procure por display_errors e coloque em On*/
        /* Regras para nomes de identificadores:
        1 - Sempre começar com $
        2 - Depois do $ pode ser letra ou _
        3 - Aceita a-z, A-Z, 0-9 e _
        4 - Aceita acentos
        5 - Ceita ç
        6 - Se a variável for declarada em minúsculos e outra com maiusculos, são 2 variáveis diferentes
        7 - Nomes especiais como $this não podem ser usadas
        */
    ?>
</body>
</html>