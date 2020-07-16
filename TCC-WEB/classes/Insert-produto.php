<?php
    header("Cache-Control: no-cache, no-store, must-revalidate"); 

    require 'Conexao.php';

    session_start();
    $idUsuario = $_SESSION['idLogin'];
    $nomeProduto = $_POST['nome'];
    $categoria = $_POST['categoria'];
    $condicao = $_POST['condicao'];
    $descricaoProduto = $_POST['descricao'];

    $filename = $_FILES['file']['name'];
    $target_dir = "../uploads/";

    $target_file = $target_dir . basename($_FILES["file"]["name"]);

    // Select file type
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Valid file extensions
    $extensions_arr = array("jpg","jpeg","png","gif");

    // Convert to base64 
    $image_base64 = base64_encode(file_get_contents($_FILES['file']['tmp_name']));
    $image = "data::image/".$imageFileType.";base64,".$image_base64;

    $conexao = abrirConexao();

    $selectCod = "SELECT * FROM tbestadoproduto";
    $consulta = $conexao->query($selectCod);

    while($linhaSelect = mysqli_fetch_array($consulta)){
        $condicaoBanco = $linhaSelect['estado'];
        if($condicaoBanco == $condicao){
            $idCondicao = $linhaSelect['idEstadoProduto'];
            $instrucaoSQL = "INSERT INTO tbproduto (idUsuario, idEstadoProduto, nomeProduto, descricaoProduto, imagemProduto) 
            VALUES('$idUsuario', '$idCondicao', '$nomeProduto', '$descricaoProduto', '$image')";
            $executa = $conexao->query($instrucaoSQL);
        }
    }
    
    if($executa == 1){
        header('Location: ../Index.php');
    }
    $conexao->close();

?>