<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>questao_10</title>
</head>
<body>
    <h1>Questao 10</h1>
    <?php



$numeros = [1, 2, 3, 4, 5];

$dobro = array_map(function($n) {
    return $n * 2;
}, $numeros);


print_r($dobro)
?>

?>

    <br>
     <a href="questao_9.php">Questao 9</a><br>
</body>
</html>