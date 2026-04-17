<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>questao_8</title>
</head>
<body>
    <h1>Questao 8</h1>
    <?php
$produtos = [
    "Teclado Mecânico" => 350.00,
    "Monitor Gamer" => 1200.00,
    "Cadeira Ergonômica" => 1600.00
];

$somaTotal = 0;


echo "Lista de Produtos:<br>";
foreach ($produtos as $nome => $preco) {
    echo "- $nome: R$ " . number_format($preco, 2, ',', '.') . "\n";
    $somaTotal += $preco;
}

echo "\nSoma Total: R$ " . number_format($somaTotal, 2, ',', '.');
    ?>
    <br>
    <a href="questao_7.php">Questao 7</a><br>
    <a href="questao_9.php">Questao 9
</body>
</html>