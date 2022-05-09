<?php

    include "database.php";

    $login = $_POST['usuario'];
    $senha = $_POST['senha'];

    $sql = "INSERT INTO usuarios_estoque (login, senha)
        VALUES ('$login', '$senha')";

    if (mysqli_query($conexao, $sql)) {
        header("Location: login.php");
    } else {
        echo "Erro ao cadastrar usuário";
    }
?>    