<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/Index-style.css">
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


        <div class="container" style="padding-top: 50px; padding-bottom: 50px;">
            
                <div class="row">

                    <div class="col-md-5">

                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                            <div class="carousel-item active">
                            <?php
                                include_once "classes/conexao.php";
                                session_start();
                                $idProduto = $_GET['idproduto'];

                                $conexao = abrirConexao(); 

                                $sql = "SELECT * FROM tbproduto";
                                $result = $conexao->query($sql);

                                while($row = mysqli_fetch_array($result)){
                                    $image_src = $row['imagemProduto'];
                                    $id = $row['idProduto'];
                                    if($id == $idProduto){

                                        echo('<div class="col-md-10 product-grid">');
                                        echo('<div class="image">');
                                        echo('<a href="#">');
                                        echo('<img class="w-100" src="'.$image_src.'">');
                                        echo('<div class="overlay">');
                                        echo('<div class="detail">Ver Mais</div>');
                                        echo('</div>');
                                        echo('</a>');
                                        echo('</div>');
                                        echo('</div>');
                                        
                                    }
                                }
                                
                                $conexao->close();
                            ?>
                            </div>
                            <!--div class="carousel-item">
                                <img class="d-block w-100" src="img/imac.jpg" alt="Segundo Slide">
                            </div-->
                            
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Anterior</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Próximo</span>
                            </a>
                        </div>

                    </div>

                    <div class="col-md-7">
                        <p class="newarrival ">Recente</p>
                        <?php
                            include_once "classes/conexao.php";
                            $idProduto = $_GET['idproduto'];

                            $conexao = abrirConexao(); 

                            $sql = "SELECT * FROM tbproduto WHERE idProduto = $idProduto";
                            $result = $conexao->query($sql);
                        
                            $selectCond = $conexao->query("SELECT * FROM tbestadoproduto");

                            while($row = mysqli_fetch_array($result)){
                                $_SESSION['idUsuarioProd'] = $row['idUsuario'];
                                $idUser = $row['idUsuario'];
                                $id = $row['idProduto'];
                                $nomeProd = $row['nomeProduto'];
                                $idcond = $row['idEstadoProduto'];
                                $desc = $row['descricaoProduto'];
                                while($seila = mysqli_fetch_array($selectCond)){
                                    $idCondicao = $seila['idEstadoProduto'];
                                    $condicao = $seila['estado'];
                                    $teste = $conexao->query("SELECT * FROM tbusuario WHERE idUsuario = $idUser");
                                    while($teste2 = mysqli_fetch_array($teste)){
                                        $nomeUsuario = $teste2['nomeUsuario'];
                                        if($idCondicao == $idcond){
                                            echo('<h2>'.$nomeProd.'</h2>');
                                            echo('<p style="."opacity:80%;"><b style="color:rgb(0, 0, 0);">Anunciante: </b> <a href="#">'.$nomeUsuario.'</a></p>');
                                            echo('<p style="opacity:80%;"><b>Condição: </b>'.$condicao.'</p>');
                                            echo('<p style="opacity:80%;"><b style="color:rgb(0, 0, 0);">Descrição: </b>'.$desc .'</p>');
                                            echo('<a href="classes/Insert-chat.php" class="btn buy" style="width: 70%; background-color: #407DFC; color: #fff;">Chamar</a>');
                                        }
                                    }
                                }
                            }
                            
                        ?>
                    </div>

                </div>

            </div>

            <hr class="linha " style="width: 50%; margin-left: 27%; color: rgb(2, 2, 2);">

            <div class="container" style="padding-top: 50px; padding-bottom: 50px;">

                <h3 class="text-center" style="opacity: 80%;">Semelhantes</h3>

                <div class="row" style="padding-top:5px;">
                    <!-- Produto  -->
                    <div class="col-md-4 product-grid">
                        <div class="image">
                          <a href="#">
                            <img src="img/Ps4.jpg" class="w-100">
                            <div class="overlay">
                              <div class="detail">Ver Mais</div>
                            </div>
                          </a>
                        </div>
                        <h5 class="text-center">PS4 PRO</h5>
                        <h5 class="text-center">Condição: 8/10</h5>
                        <a href="Produto.php" class="btn buy" style=" background-color: #407DFC; color: #fff;">Visualizar</a>
                      </div>
                      <!-- ./Produto -->
              
                      <!-- Produto  -->
                      <div class="col-md-4 product-grid">
                        <div class="image">
                          <a href="#">
                            <img src="img/beat.jpg" class="w-100">
                            <div class="overlay">
                              <div class="detail">Ver Mais</div>
                            </div>
                          </a>
                        </div>
                        <h5 class="text-center">Beats Solo 3 Wireless</h5>
                        <h5 class="text-center">Condição: 6/10</h5>
                        <a href="#" class="btn buy" style=" background-color: #407DFC; color:#fff;">Visualizar</a>
                      </div>

                </div>

            </div>






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
                    <a class="dark-grey-text" href="#!">Html</a>
                </p>
                <p>
                    <a class="dark-grey-text" href="#!">CSS3</a>
                </p>
                <p>
                    <a class="dark-grey-text" href="#!">PHP 7.4.7</a>
                </p>
                <p>
                    <a class="dark-grey-text" href="#!">JavaScript</a>
                </p>
                <p>
                    <a class="dark-grey-text" href="#!">Bootstrap Angular</a>
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
      
      <!-- Copyright -->
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