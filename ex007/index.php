<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores aritméticos</title>
</head>
<body>
    <?php 
    
    $r = "2" + "2";
    
    // echo "$r <br>";

    // var_dump($r);

    $a = 5 + 2;
    $b = 5 - 2;
    $c = 5 * 2;
    $d = 5 / 2;
    $e = 5 % 2;
    $f = 5 ** 2;

    echo "5 + 2 = $a <br>";
    echo "5 - 2 = $b <br>";
    echo "5 * 2 = $c <br>";
    echo "5 / 2 = $d <br>";
    echo "5 % 2 = $e <br>";
    echo "5 ** 2 = $f <br>"; 

    $x = 50 / 2 + 3**2;
    echo " O resultado da expresão 50 / 2 + 3**2 é $x";
    
    ?>
</body>
</html>