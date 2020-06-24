<?php

    header("Cache-Control: no-cache, no-store, must-revalidate"); 

    require 'Conexao.php';

    $idUsuario = isset($_GET['idProduto'])? $_GET['idProduto'] :'';	

    try{

        $stmt = $pdo->prepare("DELETE tbProduto WHERE idProduto = '$idProduto'");
        $stmt->execute();

    }catch(PDOException $e){

        echo 'Error: '. $e->getMessage();

    }

?>