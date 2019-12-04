<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="_css/estilo.css" />
        <title>Funções aritmeticas</title>
        <style>
            h2
            {
                font: 12pt Arial;
                color: #171559;
                font-weight: bold;
            }
        </style>
    </head>
    <body>
    <div>
        <h1>Funções aritmeticas</h1>
    <?php
        $v1 = $_GET["x"];
        $v2 = $_GET["y"];
        // abs($v) --> mostra o modulo do valor de v
        echo "<h2> Valores recebidos: $v1 e $v2</h2>";
        echo "O valor absoluto de $v1 é: ". abs($v1);
        echo "<br>O valor absoluto de $v2 é: ". abs($v2);
        
        // pwo($v1, $v2) --> v1 elevado a v2
        echo "<br>O valor de $v1<sup>$v2</sup> é: ". pow($v1, $v2);
        // sqrt($v) --> raiz quadrada de v
        echo "<br>A raiz quadrada de $v1 é: ". sqrt($v1);
        echo "<br>A raiz quadrada de $v2 é: ". sqrt($v2);

        // roud($v) --> arredondamento, para valores reais | ceil -- pra cima; floor pra baixp
        echo "<br>O valor de $v1 arredondado é:". round($v1);
        echo "<br>O valor de $v2 arredondado é:". round($v2);

        // intval() --> parte inteira de um valor
        echo "<br>A parte inteira  de $v1 é:". intval($v1);
        echo "<br>A parte inteira  de $v2 é:". intval($v2);

        //number_format() --> Formatar em valor monetario
        echo "<br>O valor de $v1 em moeda é: R$". number_format($v1, 2, ",", ".");
        echo "<br>O valor de $v2 em moeda é: R$". number_format($v2, 2, ",", ".");

    ?>
    </div>
    </body>
</html>