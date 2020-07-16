<?php
    header("Cache-Control: no-cache, no-store, must-revalidate"); 

    include_once "conexao.php";
    
    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $cep = $_POST['cep'];
    $facebook = $_POST['facebook'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $confirmarSenha = $_POST['confirmarSenha'];
    
    $conexao = abrirConexao();
    if($senha === $confirmarSenha){
        if($nome != '' && $email != '' && $senha != ''){    
            $instrucaoSQL = "INSERT INTO tbusuario (nomeUsuario, emailUsuario, senhaUsuario) 
            VALUES ('$nome', '$email', '$senha')";
        }    
        $executa = $conexao->query($instrucaoSQL);
        
        if($executa == 1){
            header('Location: ../Index.php');
        }
    }else{
        echo "senhas diferentes!!" ;
    }
    $conexao->close();
?>

?>