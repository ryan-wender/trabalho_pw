<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 3</title>
</head>
<body>
    <h1>Questão 3</h1>
    <?php
    $idade = 25; 

if ($idade < 18) {
    echo "Menor de idade";
} elseif ($idade >= 18 && $idade < 60) {
   
echo "Adulta";
} else {
    echo "Idosa";
}
    ?>
<br>
    <a href="questao_2.php">Questão 2</a><br>
    <a href="questao_4.php">Questão 4</a>
</body>
</html>