<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipo Primitivo de PHP</title>
</head>
<body>
    <h1>Testes de Tipos Primitivos</h1>
    <?php 
        // 0x = hexadecimal 0b = binário 0 = octal 
        // $num = 0b1011;
        // $num = 010;
        // echo "O valor da variável é $num";

        // $v = "Heitor";
        // var_dump($v);
        //var_dump() coloar na tela todas as informações da variável

        // $num = 3e2; 3 x 10(2)
        // escho "O valor é $num";
        // var_dump($num);

        $num = (int) 3e2;
        // isso é coersão, q é forçar um tipo em uma variável
        echo "O valor é $num";
        var_dump($num);

        // $casado = false;
        // var_dump($casado);
        // print "O valor para casado é $casado";
        // true = 1 e false = vazio, tem mais características

        // $vet = [6,2.5,"Pedro",5,false];
        // var_dump($vet);

        class pessoa {
            private string $nome;
        }
        $p = new pessoa;
        var_dump($p);
    ?>
</body>
</html>