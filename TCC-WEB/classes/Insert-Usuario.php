<?php

    header("Cache-Control: no-cache, no-store, must-revalidate"); 

    require 'Conexao.php';

    $numero = isset($_GET['numero'])? $_GET['numero'] :'';
    $nome = isset($_GET['nome'])? $_GET['nome'] :'';
    $sobrenome = isset($_GET['sobrenome'])? $_GET['sobrenome'] :'';	
    $cpf = isset($_GET['cpf'])? $_GET['cpf'] :'';	
    $rg = isset($_GET['rg'])? $_GET['rg'] :'';
    $email = isset($_GET['email'])? $_GET['email'] :'';	
    $senha = isset($_GET['senha'])? $_GET['senha'] :'';	


    try{		
		$stmt = $pdo->prepare("INSERT INTO tbusuario (numeroUsuario, nomeUsuario, sobrenomeUsuario, cpfUsuario, rgUsuario, emailUsuario, senhaUsuario) 
        VALUES('$numero', '$nome', '$sobrenome', '$cpf', '$rg', '$email', '$senha')");		
		$stmt->execute();				 				 		
		
	}catch(PDOException $e) {

        echo 'Error: ' . $e->getMessage();
        
	}	
	$pdo = null;

?>