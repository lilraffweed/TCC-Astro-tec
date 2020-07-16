<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/Profile-style.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
        <!-- Bootstrap core CSS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    </head>
    <body>
        
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="Index.php">
            <img src="img/Trato-Feito.png" width="80" alt="Logo" loading="lazy">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link white-text" href="Index.php">Inicio <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
        
        
          
              <li class="nav-item">
        
        
                <!-- redirecio pro perfil se estiver logado se n pro login -->
                  <a class="nav-link white-text" href="Meus-produtos.php">Meus Produtos</a>
                
          
          
                </li>
              
               <li class="nav-item">
                <a class="nav-link white-text" href="Perfil.php" tabindex="-1">Perfil</a>
              </li>

              <li class="nav-item">
                <a class="nav-link white-text" href="Tela-Login.php" tabindex="-1">Login</a>
              </li> 


            </ul>
            <form class="form-inline my-4 my-lg-2">
              <input class="form-control mr-sm-2" type="search" placeholder="Pesquisa" aria-label="Pesquisa">
              <button class="btn my-2 my-sm-0 sofiz" type="submit"><i class="fas fa-search"></i></button>
            </form>
          </div>
        </nav>
       <!--Fim da nav--> 
        <br>

         <div class="container">   
            <div class="card">
                <div class="card-body">
                <h3 class="card-title text-center" style="opacity:80%;">Editar Perfil</h5>
                <p class="card-text"><form>
                
              <div class="form-group">
                <label for="inputEmail4">Nome</label>
                <input type="text" class="form-control" id="inputAddress" name="nome" placeholder="José Da Silva">
                </div>
                <div class="form-group">
                    <label for="inputEmail4">Endereço</label>
                    <input type="text" class="form-control" id="inputAddress" name="endereco" placeholder="Rua Dos Bobos">
                </div>
                <div class="form-group">
                    <label for="inputEmail4">CEP</label>
                    <input type="text" class="form-control" id="inputAddress" name="cep" placeholder="15802-270">
                </div>
                <div class="form-group">
                    <label for="inputEmail4">Facebook</label>
                    <input type="text" class="form-control" id="inputAddress" name="facebook" placeholder="Facebook/profile.php">
                </div>
                <div class="form-group">
                <label for="inputEmail4">Email</label>
                <input type="text" class="form-control" id="inputAddress" name="email" placeholder="josefiono123@gmail.com">
                </div>
                <div class="form-group">
                <label for="inputPassword">Senha</label>
                <input type="text" class="form-control" id="inputPassword" name="senha" placeholder="********">
                </div>
                <div class="form-group">
                <label for="inputPassword">Confirmar senha</label>
                <input type="password" class="form-control" id="inputPassword" name="confirmarSenha" placeholder="********">
                </div>
                <div class="form-row">
                
                
                </div>
            </form></p>
                <a href="#" class="btn" id="checked" style="background-color: #1FDE2C; "> <i class="fas fa-check"></i> Salvar Alterações</a>
                <a href="Index.php" class="btn" id="canceled" style="background-color: #CD0303; "> <i class="fas fa-times"></i> Cancelar</a>
                
                </div>
            </div>
        </div>


        
                        
        
    





        <br>
        <!--Inicio do Footer-->
        <footer class="page-footer font-small  lighten-5" >

            <div style="background-color: #407DFC;">
            <div class="container">
      
                <!-- Grid row-->
                <div class="row py-4 d-flex align-items-center">
      
                <!-- Grid column -->
              
                <!-- Grid column -->
      
                <!-- Grid column -->
                <div class="col-md-6 col-lg-7 text-center text-md-right">
      
                    <!-- Facebook -->
                    <a class="fb-ic">
                    <i class="fab fa-facebook-f white-text mr-4"> </i>
                    </a>
                    <!-- Twitter -->
                    <a class="tw-ic">
                    <i class="fab fa-twitter white-text mr-4"> </i>
                    </a>
                    <!-- Google +-->
                    <a class="gplus-ic">
                    <i class="fab fa-google-plus-g white-text mr-4"> </i>
                    </a>
                    <!--Linkedin -->
                    <a class="li-ic">
                    <i class="fab fa-linkedin-in white-text mr-4"> </i>
                    </a>
                    <!--Instagram-->
                    <a class="ins-ic">
                    <i class="fab fa-instagram white-text"> </i>
                    </a>
      
                </div>
                <!-- Grid column -->
      
                </div>
                <!-- Grid row-->
      
            </div>
            </div>
      
            <!-- Footer Links -->
            <div class="container text-center text-md-left mt-5">
      
            <!-- Grid row -->
            <div class="row mt-3 dark-grey-text">
      
                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mb-4">
      
                <!-- Content -->
                <h6 class="text-uppercase font-weight-bold">Nome Da Companhia</h6>
                
                <p>Equipe Astrotec</p>
      
                </div>
                <!-- Grid column -->
      
                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
      
                <!-- Links -->
                <h6 class="text-uppercase font-weight-bold">Tecnologias Usadas</h6>
                
                <p>
                    <p>Html</p>
                </p>
                <p>
                    <p>CSS3</p>
                </p>
                <p>
                    <p>PHP 7.4.7</p>
                </p>
                <p>
                    <p>JavaScript</p>
                </p>
                <p>
                    <p>Bootstrap Angular</p>
                </p>
      
                </div>
                <!-- Grid column -->
      
                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
      
                <!-- Links -->
                <h6 class="text-uppercase font-weight-bold">Ajuda</h6>
                
                <p>
                    <a class="dark-grey-text" href="#!">Fale Conosco</a>
                </p>
                <p>
                    <a class="dark-grey-text" href="#!">Duvidas Frequêntes</a>
                </p>
              
      
                </div>
                <!-- Grid column -->
      
                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
      
                <!-- Links -->
                <h6 class="text-uppercase font-weight-bold">Contato</h6>
                
                <p>
                    <i class="fas fa-home mr-3"></i>R. Felíciano de Mendonça, 290 - Guaianases, São Paulo - SP, 08460-365</p>
                <p>
                    <i class="fas fa-envelope mr-3"></i> Astrotec@gmail.com</p>
                <p>
                    <i class="fas fa-phone mr-3"></i> +55 11 </p>
                <p>
                <i class="fas fa-code mr-3"></i>astrotec2020@gmail.com</p>
      
                </div>
                <!-- Grid column -->
      
            </div>
            <!-- Grid row -->
      
        </div>
        <!-- Footer Links -->

        <div class="footer-copyright text-center text-white- py-3" style="background-color: #407DFC;">© 2020 Copyright:
            <a class="white-text" href="#"> Tratofeito.com</a>
            </div>
            <!-- Copyright -->
            
    </footer>
    <!-- Footer -->
      



        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
    </body>
</html>