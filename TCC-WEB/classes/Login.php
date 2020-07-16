<?php
    include_once "conexao.php";

    session_start();

    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $aux = 0;

    $conexao = abrirConexao();

    $sql = "SELECT * FROM tbusuario";
    $consulta = $conexao->query($sql);

    while($linhaSelect = mysqli_fetch_array($consulta)){
        if($email == $linhaSelect['emailUsuario'] && $senha == $linhaSelect['senhaUsuario']){
            $aux = 1;
            $idUsuario = $linhaSelect['idUsuario'];
        }
    }
    if($aux == 1){
        $_SESSION['idLogin'] = $idUsuario;
        header('Location: ../Index.php');
    }else{
        header('Location: ../Tela-Login.php');
    }
        
    $conexao->close();
?>