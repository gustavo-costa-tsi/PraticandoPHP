<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exemplo de PHP</h1>
    <?php 
        date_default_timezone_set("America/Sao_Paulo"); ///GMT -3
        echo "Hoje é dia " . date("d/m/Y"); // d = dia numerico, D = dia da semana; m = dia numerico, M = Dia de semana; y = ano completo. ex.: 2026, Y = ano reduzido. ex: 26
        echo " e a hora atual é " . date("G:i:s"); // A data do servidor vem fora do padrao brasileiro, por isso a conversão 
        ?>
</body>
</html>