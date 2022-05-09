<?php 
	include "database.php";
	
	$produto_id=$_GET['produto_id'];

	$sql="DELETE FROM produtos_estoque WHERE id='$produto_id'";

	if (mysqli_query($conexao, $sql)) {
        header("Location: index.php");
    } else {
        echo "Erro ao deletar produto :C";
    }

?>
