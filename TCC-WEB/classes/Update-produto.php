<?php

    header("Cache-Control: no-cache, no-store, must-revalidate"); 

    require 'Conexao.php';

    $idUsuario = isset($_GET['idUsuario'])? $_GET['idUsuario'] :'';
    $idCategoria = isset($_GET['idCategoria'])? $_GET['idCategoria'] :'';	
    $idSubCategoria = isset($_GET['idSubCategoria'])? $_GET['idSubCategoria'] :'';	
    $nomeProduto = isset($_GET['nomeProduto'])? $_GET['nomeProduto'] :'';
    $descricaoProduto = isset($_GET['descricaoProduto'])? $_GET['descricaoProduto'] :'';
    $imagemProduto = isset($_GET['imagemProduto'])? $_GET['imagemProduto'] :'';	

    try{

        $stmt = $pdo->prepare("UPDATE tbProduto SET idUsuario = '$idUsuario', idCategoriaProduto = '$idCategoriaProduto', idSubCategoriaProduto = '$idSubCategoriaProduto', nomeProduto = '$nomeProduto', descricaoProduto = '$descricaoProduto', 
        descricaoProduto = '$descricaoProduto' WHERE idProduto = '$idProduto'");
        $stmt->execute();

    }catch(PDOException $e){

        echo 'ERROR: ' . $e->getMessage(); 

    }

?>