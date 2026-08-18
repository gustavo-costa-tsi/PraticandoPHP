<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 3</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Conversão Real x Dólar</h1>
    </header>
    <main>
    <?php 
        $dinheiro = $_GET["dinheiro"] ?? "Sem dinheiro";
        $grana = 5.21 * $dinheiro;

        echo "<p>Você tem R$ $dinheiro<p>";
        echo "<p>Isso equivale a $ $grana <p>";
    ?>
        <p><a href="javascript:history.go(-1)">Voltar para página anterior</a></p>
    </main>
</body>
</html>