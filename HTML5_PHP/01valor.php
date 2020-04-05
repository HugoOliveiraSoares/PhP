<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Curso em video</video></title>
</head>
<body>

    <div>

    <?php

        $valor = $_GET["v"];

        $rq = sqrt($valor);

        echo "A raiz de $valor é igual a: ".number_format($rq,2);
    
    ?>
    <a href="ex1.html">Voltar</a>

    </div>
    
</body>
</html>