<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>questao_6</title>
</head>
<body>
    <h1>Questao 6</h1>
    <?php
    $dados = [
    "Alice" => 15,
    "Bruno" => 8,
    "Carlos" => 20,
    "Daniel" => 10,
    "Elisa" => 12
];

echo "Números maiores que 10:\n";

foreach ($dados as $nome => $numero) {
    
    if ($numero > 10) {
        echo $nome . ": " . $numero . "\n";
    }
}
    ?>
    <br>
    <a href="questao_5.php">Questao 5</a><br>
    <a href="questao_7.php">Questao 7</a>
</body>
</html>