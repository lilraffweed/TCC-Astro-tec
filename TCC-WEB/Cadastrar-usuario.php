<html>
    <head>
        <meta charset="utf-8">
        <title>Cadastre-se</title>
        <link rel="stylesheet" href="css/Cadastro-style.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
        <!-- Bootstrap core CSS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    </head>
    <body>

        <form action="./classes/Insert-Usuario.php" method="post">
        <div class="container" style="padding-top: 50px; padding-bottom: 50px;">   
            <div class="card">
                <div class="card-body">
                <h3 class="card-title text-center" style="opacity: 80%;">Cadastre-se</h5>
                <p class="card-text"><form>
                
              <div class="form-group">
                <label for="inputEmail4">Nome</label>
                <input type="text" class="form-control" id="inputAddress" name="nome" placeholder="">
                </div>
                <div class="form-group">
                    <label for="inputEmail4">Endereço</label>
                    <input type="text" class="form-control" id="endereco" name="endereco" placeholder="">
                </div>
                <div class="form-group">
                    <label for="inputEmail4">CEP</label>
                    <input type="text" class="form-control" id="cep" name="cep" maxlength="9" placeholder="">
                </div>
                <div class="form-group">
                    <label for="inputEmail4">Facebook</label>
                    <input type="text" class="form-control" id="inputAddress" name="facebook" placeholder="">
                </div>
                <div class="form-group">
                <label for="inputEmail4">Email</label>
                <input type="text" class="form-control" id="inputAddress" name="email" placeholder="">
                </div>
                <div class="form-group">
                <label for="inputPassword">Senha</label>
                <input type="password" class="form-control" id="inputPassword" name="senha" placeholder="">
                </div>
                <div class="form-group">
                <label for="inputPassword">Confirmar senha</label>
                <input type="password" class="form-control" id="inputPassword" name="confirmarSenha" placeholder="">
                </div>
                <div class="form-row">
                
                    <div class="col text-center">
                        <button class="Facebook" href="#">
                            <i class="fab fa-facebook-f"></i>
                        </button>

                        <button class="Google" href="#" style="margin-left: 2px;">
                            <i class="fab fa-google-plus-g"></i>
                        </button>
                    
                        
                        <button class="Git" href="#" style="margin-left: 2px;">
                            <i class="fab fa-github"></i>
                        </button>
                    </div>

                </div>
            </form></p>
                <div class="col text-center">
                    <button type="submit" class="btn" id="Cadastrar">Cadastrar</button>

                    <a href="Index.php" class="btn" id="canceled"style=" background-color: #407DFC; color:#fff;"> <i class="fas fa-times"></i> Cancelar</a>

                </div>
                </div>
            </div>
        </div>
    </form>

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
    </body>
</html>