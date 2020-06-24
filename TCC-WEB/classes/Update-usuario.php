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

        $stmt = $pdo->prepare("UPDATE tbUsuario SET numeroUsuario = '$numero', nomeUsuario = '$nome', cpfUsuario = '$cpf', rgUsuario = '$rg', emailUsuario = '$email', senhaUsuario = '$senha' WHERE idUsuario = '$idUsuario'");
        $stmt->execute();

    }catch(PDOException $e){

        echo 'Error: ' . $e->getMessage();

    }

    $pdo = null;

?>