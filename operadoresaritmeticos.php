<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="_css/estilo.css" />
        <title>OperadoresAritméticos</title>
    </head>
    <body>
    <div>
        <h1>Operadores Aritméticos</h1>
    <?php
        $n1 = $_GET["a"];
        $n2 = $_GET{"b"};
        echo "Colocar os valores na url";
        echo "<h2> Valores recebidos: $n1 e $n2 </h2>";

        $m = ($n1 + $n2) / 2;

        $r = $n1 + $n2;
        echo "Resultado soma: $r <br>";

        $r = $n1 - $n2;
        echo "Resultado subtração: $r <br>";

        $r = $n1 * $n2;
        echo "Resultado multiplicação: $r <br>";

        $r = $n1 / $n2;
        echo "Resultado divisão: $r <br>";

        $r = $n1 % $n2;
        echo "Resultado modulo: $r <br>"; // Resto da divisão

        echo "A media vale: $m";

    ?>
    </div>
    </body>
</html>