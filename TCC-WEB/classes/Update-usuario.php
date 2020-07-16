<?php
    header("Cache-Control: no-cache, no-store, must-revalidate"); 

    include_once "conexao.php";
    $conexao = abrirConexao();

    session_start();
    $idLogin = $_SESSION['idLogin'];

    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $cep = $_POST['cep'];
    $facebook = $_POST['facebook'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $confirmarSenha = $_POST['confirmarSenha'];
    
    if($senha === $confirmarSenha){
        if($nome != '' && $email != '' && $senha != ''){    
            $instrucaoSQL = "UPDATE tbusuario 
            SET nomeUsuario = $nome, emailUsuario = $email, senhaUsuario = $senha
            WHERE idUsuario = $idLogin";
        }    
        $executa = $conexao->query($instrucaoSQL);
        
        if($executa == 1){
            header('Location: ../Index.php');
        }
    }else{
        echo "senhas diferentes!!";
    }
    $conexao->close();
?>

?>