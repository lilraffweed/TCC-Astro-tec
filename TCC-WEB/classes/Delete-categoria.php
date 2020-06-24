<?php

    header("Cache-Control: no-cache, no-store, must-revalidate"); 

    require('conexao.php');
        
    $idCategoriaProduto = isset($_GET['idCategoriaProduto'])? $_GET['idCategoriaProduto'] :'';	

    try{		
        $stmt = $pdo->prepare("DELETE tbcategoriaproduto
        WHERE idCategoriaProduto = '$idCategoriaProduto'");
        $stmt->execute(); 		
        
    }catch(PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }	

?>