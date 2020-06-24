<?php

    header("Cache-Control: no-cache, no-store, must-revalidate"); 

    require 'Conexao.php';

    $idUsuario = isset($_GET['idUsuario'])? $_GET['idUsuario'] :'';	

    try{

        $stmt = $pdo->prepare("DELETE tbUsuario WHERE idUsuario = '$idUsuario'");
        $stmt->execute();

    }catch(PDOException $e){

        echo 'Error: '. $e->getMessage();

    }

?>