<!doctype html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="_css/estilo.css" />
    <title>Variaveis de Variaveis</title>
</head>
    <body>
        <div>
            <h1>Variaveis de Variaveis</h1>
            <?php
                $a = "abc";
                $$a = "def";
                echo "O conteudo da variavel A é $a";
                echo "<br>O conteudo da variavel ABC é $abc";
            ?>
        </div>
    </body>
</html>