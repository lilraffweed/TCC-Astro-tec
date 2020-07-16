<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <link rel="stylesheet" href="css/Login-style.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
        <!-- Bootstrap core CSS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    </head>
    <body>
        <form action="./classes/Login.php" method="post">
        <div class="container" style="padding-top: 11%;">   
            <div class="card">
                <div class="card-body">
                <h3 class="card-title text-center">Login</h3>
                <p class="card-text"><form>
          
                <div class="form-group">
                <label for="inputEmail4">Email</label>
                <input type="text" class="form-control" id="inputAddress" name="email" placeholder="">
                </div>
                <div class="form-group">
                <label for="inputPassword">Senha</label>
                <input type="password" class="form-control" id="inputPassword" name="senha" placeholder="">
                </div>
               
                <div class="form-row">
                    <a class="redirecionar">Esqueceu a senha?</a>
                    
                </div>
                <div class="form-row">
                   
                    <div class="form-check" style="margin-top: 5px;">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1" id="check-text">Lembre-se de mim</label>
                      </div>

                </div>

             

            </form></p>
            <div class="col text-center">
                <button type="submit" class="btn " id="logar">Logar</button>
            </form>
                <a href="Cadastrar-usuario.php" class="btn " id="Cadastrar">Cadastre-se</a>
            </div>
        
      </div>
    
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
    </body>
</html>