<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <title>OperadoresAritméticos</title>
</head>

<body>
    <div>
        <h1>Operadores Aritméticos</h1>
        <?php
        /********************************************
         *Operadores de atribuição:
         * Adição:         $a = $a + $b --> $a += $b
         * Subtração:      $a = $a - $b --> $a -= $b
         * Multiplicação:  $a = $a * $b --> $a *= $b
         * Divisão:        $a = $a / $b --> $a /= $b
         * Modulo:         $a = $a % $b --> $a %= $b
         * Concatenação:   $a = $a . $b --> $a .= $b
         ********************************************/
        // Aplicar 10% de desconto ao preço de um produto
        $p = $_GET["a"]; // Recebe o valor na url
        echo "O preço do produto é R$" . number_format($p, 2, ",", ".");
        $p -= $p * 0.1;
        echo "<br>O desconto é: R$" . number_format($p, 2, ",", ".");
        ?>
    </div>
</body>

</html>