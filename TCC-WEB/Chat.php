<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/Chat-style.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" type="text/css" rel="stylesheet">
        <!-- Bootstrap core CSS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">


        <script src="js/atualiza.js"></script>
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


        


'
        <div class="container">
            <div class="card">
           
            <div class="messaging">
            <div class="inbox_msg">
                <div class="inbox_people">
                <div class="headind_srch">
                    <div class="recent_heading">
                    <h4>Recentes</h4>
                    </div>
                    <div class="srch_bar">
                   
                    </div>
                </div>
                <div class="inbox_chat">
                
                    <?php
                        include_once "classes/conexao.php";
                        session_start();
                        $idLogin = $_SESSION['idLogin'];

                        $conexao = abrirConexao();

                        $selectChat = $conexao->query("SELECT * FROM tbchatusuario");

                        while($row = mysqli_fetch_array($selectChat)){
                            $idUser = $row['idUsuario'];
                            if($idUser == $idLogin){
                                $idUser = $row['idUsuario2'];
                            }
                            
                            $selectUsuario = $conexao->query("SELECT * FROM tbusuario WHERE idUsuario = $idUser");

                            while($teste = mysqli_fetch_array($selectUsuario)){
                                $nomeUsuario = $teste['nomeUsuario'];
                                if(($idLogin == $row['idUsuario']) && ($idUser == $row['idUsuario2']) || ($idUser == $row['idUsuario']) && ($idLogin == $row['idUsuario2'])){
                                    echo('<a href="classes/Pegar-id.php?iduser='.$idUser.'" style="border: none; background-color: white;">');
                                    echo('<div class="chat_list">');
                                    echo('<div class="chat_people">');
                                    echo('<div class="chat_img"> <img src="img/Profile/Avatar.jpg" alt="Perfil" class="rounded-circle"> </div>');
                                    echo('<div class="chat_ib">');
                                    echo('<h5>'.$nomeUsuario.'<span class="chat_date">03/10/2019</span></h5>');
                                    echo('<p></p>');
                                    echo('</div>');
                                    echo('</div>');
                                    echo('</div>');
                                    echo('</a>');
                                }
                            }
                        }
                        $conexao->close();
                    ?>
                    
                    
                    
                    
                   <!--Inbox Chat-->
                    </div>
                  <!--Inbox People-->  
                </div>

                
                <div id="setTime" class="mesgs">
                <form action="classes/Insert-mensagem.php" method="post">
                <div class="msg_history">
                        
                        <?php
                            include_once "classes/conexao.php";

                            $idLogin = $_SESSION['idLogin'];
                            $idChat = $_GET['idchat'];

                            $conexao = abrirConexao();

                            $selectMensagens = $conexao->query("SELECT * FROM tbmensagem WHERE idChatUsuario = $idChat");

                            if($selectMensagens != ""){
                                while($alo = mysqli_fetch_array($selectMensagens)){
                                    $mensagem = $alo['MensagensUsuario'];
                                    $idCha = $alo['idChatUsuario'];
                                    $horario = $alo['horaMensagem'];
                                    $idUsuario = $alo['idUsuario'];
                                    if($idChat != ""){
                                        if($idCha == $idChat){
                                            if($idUsuario != $idLogin){
                                                echo('<div class="incoming_msg">');
                                                echo('<div class="incoming_msg_img"> <img src="img/Profile/Avatar.jpg" alt="Perfil" class="rounded-circle"> </div>');
                                                echo('<div class="received_msg">');
                                                echo('<div class="received_withd_msg">');
                                                echo("<p>$mensagem</p>");
                                                echo("<span class="."time_date".">$horario</span>");
                                                echo('</div>');
                                                echo('</div>');
                                                echo('</div>');
                                            }
                                            else{
                                                echo('<div class="outgoing_msg">');
                                                echo('<div class="sent_msg">');
                                                echo("<p>$mensagem</p>");
                                                echo("<span class="."time_date".">$horario</span> </div>");
                                                echo('</div>');
                                            }
                                        }
                                    }
                                }
                            }
                            $conexao->close();
                        ?>
                        
                    
                </div>
                <div class="type_msg">
                    <div class="input_msg_write">
                    <input type="text" class="write_msg" name="mensagem" placeholder="Digite a mensagem" />
                    <button class="msg_send_btn" type="submit"><i class="fas fa-paper-plane"></i></button>
                    </div>
                </div>
                </form>
                </div>
            </div>
      
      
            
      
                </div>
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
                    <i class="fas fa-code mr-3"></i> astrotec2020@gmail.com</p>

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