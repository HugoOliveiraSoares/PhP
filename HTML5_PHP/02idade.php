<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Document</title>
</head>
<body>
    <div>
        <?php
            $nome = $_GET["nome"];
            $ano = $_GET["ano"];
            $sexo = $_GET["sexo"];
            $idade = date("Y") - $ano;

            echo "$nome é $sexo e tem $idade anos"

        ?>
        <a href="ex2.html">Voltar</a>
    </div>
</body>
</html>