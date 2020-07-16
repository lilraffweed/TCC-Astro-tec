<?php
    header("Cache-Control: no-cache, no-store, must-revalidate"); 

    include_once "conexao.php";

    session_start();
    
    $idLogin = $_SESSION['idLogin'];
    $idUsu = $_SESSION['idUsuarioProd'];
    $aux = 0;

    $conexao = abrirConexao();
    
    $selectChat = $conexao->query("SELECT * FROM tbchatusuario");
    
    while($row = mysqli_fetch_array($selectChat)){
        $idChat = $row['idChatUsuario'];
        if(($idLogin == $row['idUsuario']) && ($idUsu == $row['idUsuario2']) || ($idUsu == $row['idUsuario']) && ($idLogin == $row['idUsuario2'])){
            $aux = 1;
        }
    }
    if($aux == 1){
        $_SESSION['idChat'] = $idChat;
    }else{
        $seila = "INSERT INTO tbchatusuario(idUsuario, idUsuario2) 
        VALUES('$idLogin', '$idUsu')";
        $executa = $conexao->query($seila);
        if($executa == 1){
            $select = $conexao->query("SELECT * FROM tbchatusuario WHERE idUsuario = $idLogin AND 
            idUsuario2 = $idUsu OR idUsuario = $idUsu AND idUsuario2 = $idLogin");
            while($seila = mysqli_fetch_array($select)){
                $_SESSION['idChat'] = $seila['idChatUsuario'];
                $idChat = $seila['idChatUsuario'];
            }
        }
    }

    header("Location: ../Chat.php?idlogin=$idLogin&idchat=$idChat");
    $conexao->close();
?>