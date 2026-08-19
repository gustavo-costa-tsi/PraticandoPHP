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
    $info = $dados['value'][0]['cotacaoCompra'];
    $valor = number_format($info, 2, '.', '');  
    
    echo "US$1,00 dólar equivale a : R$ $valor reais"; 
    
    } 
    
    else {
    echo "Erro ao buscar dados da API do Banco Central.";
    }

    $dinheiro = $_GET["dinheiro"] ?? "Sem dinheiro";
    $grana = $dinheiro / $valor;

    $convertido = number_format($grana, 2, '.' , '');
    
    echo "<p>Você tem R$ $dinheiro, o que equivale a : US$ $convertido</p>";
    
    ?>
    
    <a href="javascript:history.go(-1)">Voltar para página anterior</a>

    </main>
</body>
</html>