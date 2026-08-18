
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do Sorteio</title>
    <link rel = "stylesheet" href="style.css">
</head>
<body>

<header>
    <h1>O número sorteado foi:</h1>
</header>

  <main>

    <?php 
     echo rand(1, 100);
    ?>
    
  <p><a href="javascript:history.go(-1)">Voltar para página anterior</a></p>
  </main>
</body>
</html>