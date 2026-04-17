<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>questao_9</title>
</head>
<body>
    <h1>Questao 9</h1>
    <?php
    function validarEmail(string $email): bool {
    
    
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}


$email1 = "usuario@dominio.com.br";
$email2 = "email_invalido@com";

if (validarEmail($email1)) {
    echo "O e-mail '$email1' é válido.<br>";
} else {
    echo "O e-mail '$email1' é inválido.<br>";
}

if (validarEmail($email2)) {
    echo "O e-mail '$email2' é válido.<br>";
} else {
    echo "O e-mail '$email2' é inválido.<br>";
}
    ?>
    <br>
     <a href="questao_8.php">Questao 8</a><br>
    <a href="questao_10.php">Questao 10
</body>
</html>