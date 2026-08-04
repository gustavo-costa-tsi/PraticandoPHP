<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php $numero = $_GET["numero"];
        
        $antes = $numero - 1;
        $depois = $numero + 1;

        echo "<p>O número escolhido foi $numero";
        echo "<p>O seu antecessor é $antes";
        echo "<p>O seu sucessor é $depois";

        ?>

        <p><a href="javascript:history.go(-1)">Voltar para página anterior</a></p>

    </main>
    
</body>
</html>