<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 2</title>
</head>
<body>
    <h1>Questão 2</h1>
    <?php
    $num1 = 10;
$num2 = 5;


$soma = $num1 + $num2;
$subtracao = $num1 - $num2;
$multiplicacao = $num1 * $num2;


echo "Número1: $num1 <br>";
echo "Número2: $num2 <br>";
echo "-------------------<br>";
echo "Soma: " . $soma . "<br>";
echo "Subtração: " . $subtracao . "<br>";
echo "Multiplicação: " . $multiplicacao . "<br>";


if ($num2 != 0) {
    $divisao = $num1 / $num2;
    echo "Divisão: " . $divisao . "<br>";
} else {
    echo "Divisão: Erro (não é possível dividir por zero)<br>";
}
    ?>

    <a href="index.php">Questão 1</a><br>
    <a href="questao_3.php">Questão 3</a>
</body>
</html>