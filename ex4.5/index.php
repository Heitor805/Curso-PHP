<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções aritméticas</title>
</head>
<body>
    <?php 
        $r = abs(-2000);
        print("A resposta é $r");
        //abs tira um dado de um número, ou seja irá virar 2000
        $b = base_convert(254, 10, 8);
        print("A resposta é $b");
        // converte um número para diferentes bases aritméticas
        //$c = ceil();
        //$f = floor();
        //$r = round();
        // ver futuros exercícios, servem para arredondar
        $i = intdiv(5, 2);
        print("A resposta é $i");
        // é basicamente  o resultado para dividir usando apenas números reais (ex 5/2 = 2)
        $min = min(5,2);
        $max = max(5,2);
        print("A resposta é $min");
        print("A resposta é $max");
        // fala o menor ou maior valores em uma sequência
        $p = pi();
        print("A resposta é $p");
        // fala o valor de pi
        $pow = pow(5,2);
        print("A resposta é $pow");
        // uma versão antiga de fazer potência
        // sin() cos() e tan() para calcular seno, cosceno e tangente
        $s = sqrt(25);
        print("A resposta é $s");
        // calcula raiz quadrada
    ?>
</body>
</html>