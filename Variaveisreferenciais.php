<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="_css/estilo.css" />
    <title>Variaveis Referenciais</title>
</head>
<body>
    <h1>Variaveis Referenciais</h1>
    <div>
        <?php
        $a = 3;
        $b = $a;
        $b += 5;
        echo $a;
        echo "<br>$b";
        echo "<br>==============================================<br>";
        $a = 3;
        $b = &$a; // $b acompanha $a e $a acompanha $b
        $b += 5;
        echo $a;
        echo "<br>$b";
    ?>
    </div>
</body>
</html>