<?php
    // Incluir arquivo de conexão com banco de dados
    include "database.php";

    session_start();

    // Recuperar os dados do formulário
    $login = $_POST['usuario'];
    $senha = $_POST['senha'];


    // Verificar se os campos estão vazios
     if (empty($login)) {
        $_SESSION['mensagem'] = "Preencha o campo usuário!";
        header("Location: login-usuario.php");
        
    } elseif (empty($senha)) {
        $_SESSION['mensagem'] = "Preencha o campo senha!";
        header("Location: login-usuario.php");

    } else { 
        $sql = "SELECT * FROM usuarios_estoque WHERE login = '$login' AND senha = '$senha'";
        $resultado = mysqli_query($conexao, $sql);
        $dados = mysqli_fetch_assoc($resultado);
     
        if ($dados['login'] == $login and $dados['senha'] == $senha) {
            $usuario = array("login" => $dados['login'], "senha" => $dados['senha']);
            $_SESSION['logado'] = true;
            header("Location: index.php");
            
        } else {
            $_SESSION['mensagem'] = "Login e/ou senha inválido!";
            $_SESSION['logado'] = false;
            echo 'entrou';
            header("Location: login-usuario.php");
        }
    }
?>