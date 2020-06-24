<?php

    header("Cache-Control: no-cache, no-store, must-revalidate"); 

    require('conexao.php');

    $email = isset($_GET['email'])? $_GET['email'] :'';
    $senha = isset($_GET['senha'])? $_GET['senha'] :'';

    $sql = "SELECT idUsuario FROM tbusuario WHERE emailUsuario like ? and senhaUsuario like ?";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(1, $email);
    $stmt->bindParam(2, $senha);

    if($stmt->execute()){
            $r = $stmt->fetch(PDO::FETCH_ASSOC);
        if($r['idUsuario'] === null){
            echo ('0');
        }else{
            echo ($r['idUsuario']);
        }
    }
?>