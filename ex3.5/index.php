<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings</title>
</head>
<body>
    <?php 
    // existe uma diferença entre '' e "", use o ""
        $nome = "Gustavo";
        $sobrenome = "Guanabara \u{1F596}";
        $sobre_nome = 'Guanabara \u{1F596}';
        echo "$nome$sobrenome$sobre_nome \u{1F596}";
        echo '$nome$sobrenome$sobre_nome \u{1F596}';

        const CANAL = "Curso em Video \u{1F499}";
        echo "Eu adoro o " . CANAL;

        echo "Estamos no ano de date('Y')";
        echo "Estamos no ano de " . date('Y');

        // \n Nova linha
        // \t Tabulação Horizontal
        // \\ Barra Invertida
        // \$ Sinal de Sifrão
        // \u{} Codepoint Unicode

        $nome = "Gustavo";
        $sobrenome = "Guanabara";
        $apelido = 'Gafanhoto';
        echo "$nome '$apelido' $sobrenome";
        echo "$nome ".$apelido." $sobrenome";
        echo "$nome \"$apelido\" $sobrenome";
        echo '$nome \'$apelido\' $sobrenome';
        echo "$nome \t\t \"$apelido\" \t\t$sobrenome";
        echo "$nome \n\t \"$apelido\" \n\t$sobrenome";

        $canal = "Curso em Video";
        $ano = date('Y');
        echo <<< TESTE
            Olá Galera do $canal!
                Tudo bem com vocês?
            Como está sendo esse ano de $ano?
                Abraços! \u{1F596}
        TESTE;
        // ak está sendo usado uma string hear doc q quebra linha dentro apesar não conseguir reparar na página
        $canal = "Curso em Video";
        $ano = date('Y');
        echo <<< 'TESTE'
            Olá Galera do $canal!
                Tudo bem com vocês?
            Como está sendo esse ano de $ano?
                Abraços! \u{1F596}
        TESTE;
        // ak é uma string now doc q não está interpretando o conteúdo
    ?>
</body>
</html>