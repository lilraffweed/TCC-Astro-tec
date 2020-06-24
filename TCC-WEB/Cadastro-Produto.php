<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/Cadastro.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </head>
    <body>

    <form action="Insert-produto.php" method="GET">
    <div class="form-box">
    <div class="conteudo">
    <br>
    <br>
        <center><h2 class="title">Cadastro Produto</h2>

        <input type="text" placeholder="Categoria" class="inpt" name="nome" style="width: 50%;">

            <input type="text" placeholder="SubCategoria" class="inpt" name="sobrenome" style="width: 50%;">

            <input type="text" placeholder="Produto" class="inpt" name="cpf" style="width: 50%;">

            <input type="text" placeholder="descricao" class="inpt" name="rg" style="width: 50%;">
            
            <input type="text" placeholder="imagem" class="inpt" name="email" style="width: 50%;">

            <button type="button" class="Btn">Enviar</button>
        <br>
            <a href="Index.php">login</a></center>
            <a href="Cadastro.php">cadastro</a></center>
   </div>
            <!-- <form class="log">
              
               <div class="sim">

                <h2 class="title">Login</h2>

                <input type="text" placeholder="Email" class="inpt" name="txNome" style="width: 50%;">

                <input type="text" placeholder="Senha" class="inpt" name="txNome" style="width: 50%;">

                <button type="button" class="Btn">Enviar</button>
                </div>
            </form> -->
        </div>
        </form>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    </body>
</html>