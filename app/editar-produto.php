<?php 
    include "database.php";
    $id = $_POST['id-edit'];
    $nome = $_POST['nome-edit'];
    $preco = $_POST['preco-edit'];
    $quantidade = $_POST['quantidade-edit'];


    $sql = "UPDATE produtos_estoque SET nome='$nome', preco='$preco', quantidade='$quantidade'
    WHERE id='$id'";

    if (mysqli_query($conexao, $sql)) {
        header("Location: index.php");
    } else {
        echo "Erro ao cadastrar produto :C";
    }


?>