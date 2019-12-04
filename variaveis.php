<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="_css/estilo.css" />
        <title>Variaveis</title>
    </head>
    <body>
    <div>
        <h1>VARIAVEIS</h1>
    <?php
        $nome = "Hugo";
        $idade = 18;
        $cidade = "Belo Horizonte";
        $casado = false;

        echo $nome. " tem ". $idade. " anos!<br>"; // <br> --> quebra de linha
        echo "$nome mora em $cidade.";
    ?>
    </div>
    </body>
</html>