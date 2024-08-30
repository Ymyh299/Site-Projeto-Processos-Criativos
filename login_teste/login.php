<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Exemplo simples de verificação de login
    if ($email == "usuario@exemplo.com" && $password == "senha123") {
        echo "Login bem-sucedido!";
    } else {
        echo "Email ou senha incorretos.";
    }
}
?>
