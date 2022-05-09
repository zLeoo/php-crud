<?php 
    include "database.php";

    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $quantidade = $_POST['quantidade'];

    $sql = "INSERT INTO produtos_estoque (nome, preco, quantidade)
    VALUES ('$nome', '$preco', '$quantidade')";

    if (mysqli_query($conexao, $sql)) {
        header("Location: index.php");
    } else {
        echo "Erro ao cadastrar produto :C";
    }


?>