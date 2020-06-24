<?php

require 'Conexao.php';

    try{
        
    $stmt = $conn->prepare('SELECT * FROM tbproduto');
    $stmt->execute();

    echo "<h1 class='titulo'>Usuários cadastrados</h1>";
    while($row = $stmt->fetch(PDO :: FETCH_BOTH)){
        
       echo "<div class='arrumar'>";
        echo "<div class='col s12 m7'>";
        echo "<div class='card'>";
        echo "<div class='card-content'>";
        echo "<div class='centralizar'>";
        echo $row['idUsuario'];
        echo "<br/>";
        echo $row['idCategoria'];
        echo "<br/>";
        echo $row['idSubCategoria'];
        echo "<br/>";
        echo $row['nomeProduto'];
        echo "<br/>";
        echo $row['descricaoProduto'];
        echo"</div>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
        echo"</div>";
        }

    }catch(PDOExeption $e){

        echo 'ERRO: '. $e->getMessage();

    }

?>


<html>
    <head>
        <meta charset="uft-8">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    </head>
    <body>

    
        <style>
            
            body{
           background-image: linear-gradient(to bottom, #541798, #2BB3D5, #692BD5  );
           width: 100%;
           height:100%;
      } 
            

            .arrumar{
            padding-left: 32%;  
            margin-top: 1%;
        }

            .card{
            width: 50%;
        }          

            .centralizar{
            text-align: center;
        }

            .titulo{
                font-family: sans-serif;
                color: white;
                opacity:80%;
                text-align: center;
        }

        </style>
 
           
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>
</html>





