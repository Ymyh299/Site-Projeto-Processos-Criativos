<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Aqui você faria o registro no banco de dados
    echo "Registro bem-sucedido!";
}

?>

