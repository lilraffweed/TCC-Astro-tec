<?php
    include_once "conexao.php";
    
    session_start();
    $idUser = $_GET['iduser'];
    $idLogin = $_SESSION['idLogin'];
    
    $conexao = abrirConexao(); 

    $teste = "SELECT * FROM tbchatusuario WHERE idUsuario = $idLogin AND 
    idUsuario2 = $idUser OR idUsuario = $idUser AND idUsuario2 = $idLogin";
    $selectChat = $conexao->query($teste);

    while($row = mysqli_fetch_array($selectChat)){
        $idChat = $row['idChatUsuario'];
        if($idLogin == $row['idUsuario'] && $idUser == $row['idUsuario2'] || $idUser == $row['idUsuario'] && $idLogin == $row['idUsuario2']){
            header("Location: ../Chat.php?idchat=$idChat");
        }
    }
    
    $conexao->close();
?>