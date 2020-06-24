<?php

    header("Cache-Control: no-cache, no-store, must-revalidate"); 

    require 'Conexao.php';

    $categoria = isset($_GET['categoria'])? $_GET['categoria'] :'';
	
	try{		
		$stmt = $pdo->prepare("INSERT INTO tbcategoriaproduto (categoria) 
        VALUES('$categoria')");		
		$stmt->execute();				 				 		
		
	}catch(PDOException $e) {
		echo 'Error: ' . $e->getMessage();
	}	

?>