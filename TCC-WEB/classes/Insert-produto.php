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
		$stmt = $pdo->prepare("INSERT INTO tbproduto (idUsuario, idCategoria, idSubCategoria, nomeProduto, descricaoProduto, imagemProduto) 
        VALUES('$idUsuario', '$idCategoria', '$idSubCategoria', '$nomeProduto', '$descricaoProduto', '$imagemProduto')");		
		$stmt->execute();				 				 		
		
	}catch(PDOException $e) {
		echo 'Error: ' . $e->getMessage();
	}	
	$pdo = null;

?>