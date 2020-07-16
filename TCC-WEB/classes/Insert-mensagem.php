<?php
    header("Cache-Control: no-cache, no-store, must-revalidate"); 

    include_once "conexao.php";
    
    session_start();

    date_default_timezone_set('America/Sao_Paulo');
    $horario = date('G:i:s');

    $mensagem = $_POST['mensagem'];
    $idChat = $_SESSION['idChat'];
    $idLogin = $_SESSION['idLogin'];

    $conexao = abrirConexao();

    if($mensagem != ''){    
        $instrucaoSQL = "INSERT INTO tbmensagem (mensagensUsuario, idChatUsuario, horaMensagem, idUsuario) 
        VALUES ('$mensagem', '$idChat', '$horario', '$idLogin')";
        header('Location: ../Chat.php');
    }
    $executa = $conexao->query($instrucaoSQL);
    
    $conexao->close();
?>