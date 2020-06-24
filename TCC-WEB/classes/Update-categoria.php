<?php

    header("Cache-Control: no-cache, no-store, must-revalidate"); 

    require 'Conexao.php';

    $categoriaProduto = isset($_GET['categoriaProduto'])? $_GET['categoriaProduto'] :'';
    $idCategoriaProduto = isset($_GET['idCategoriaProduto'])? $_GET['idCategoriaProduto'] :'';	
	
	try{		
		$stmt = $pdo->prepare("UPDATE tbcategoriaproduto SET categoriaProduto = '$categoriaProduto' 
        WHERE idCategoriaProduto = '$idCategoriaProduto'");
		$stmt->execute(); 		
		
	}catch(PDOException $e) {
		echo 'Error: ' . $e->getMessage();
	}	

?>