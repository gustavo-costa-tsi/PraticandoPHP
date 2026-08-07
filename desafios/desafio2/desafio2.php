
<!DOCTYPE html>
<html lang="en">
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

  </main>
</body>
</html>