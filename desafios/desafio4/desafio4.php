<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 4</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Conversor de moedas 2.0</h1>
    </header>
    <main>
    <?php 
    $url = "https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoMoedaDia(moeda=@moeda,dataCotacao=@dataCotacao)?@moeda='USD'&@dataCotacao='08-18-2026'&\$top=100&\$format=json";
    
    $resposta = file_get_contents($url);

if ($resposta !== false) {
    // Transforma o JSON em array associativo
    $dados = json_decode($resposta, true);
    
    $valor = $dados['value'][0]['cotacaoCompra'];
    
    echo "Valor da cotação atual: R$ $valor"; 
    
    } 
    
    else {
    echo "Erro ao buscar dados da API do Banco Central.";
    }

    $dinheiro = $_GET["dinheiro"] ?? "Sem dinheiro";
    $grana = $valor * $dinheiro;
    
    echo "<p>Seu dinheiro em dólares $ $grana</p>";
    
    ?>
    
    <a href="javascript:history.go(-1)">Voltar para página anterior</a>

    </main>
</body>
</html>