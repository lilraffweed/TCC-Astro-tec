<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/cadastro.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
        <!-- Bootstrap core CSS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    </head>
    <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="home.php">
    <img src="img/logo1.png" width="30" height="30" alt="" loading="lazy">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="home.php">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">


      <!-- redirecio pro perfil se estiver logado se n pro login -->
        <a class="nav-link" href="#">Perfil</a>



      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Categorias
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Brinquedos</a>
          <a class="dropdown-item" href="#">Celulares</a>
          <a class="dropdown-item" href="#">Informatica</a>
          <a class="dropdown-item" href="#">Tv e audio</a>
          <a class="dropdown-item" href="#">Moda e beleza</a>
          <a class="dropdown-item" href="#">Games e livros</a>
          <a class="dropdown-item" href="#">Moveis e decoração</a>
          <a class="dropdown-item" href="#">Eletrodomesticos</a>
          <a class="dropdown-item" href="#">Eletroportaveis</a>
        </div>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#" tabindex="-1">Cadastro de produtos</a>
      </li>
    </ul>
    <form class="form-inline my-4 my-lg-2">
      <input class="form-control mr-sm-2" type="search" placeholder="Pesquisa" aria-label="Pesquisa">
      <button class="btn my-2 my-sm-0 sofiz" type="submit">Buscar</button>
    </form>
  </div>
</nav>



    <div class="card">
  <div class="card-body">
    <h5 class="card-title">Cadastre-se</h5>
    <p class="card-text"><form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Nome</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Nome">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Sobrenome</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Sobrenome">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail4">Email</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="josefiono123@gmail.com">
  </div>
  <div class="form-group">
    <label for="inputPassword">Senha</label>
    <input type="text" class="form-control" id="inputPassword" placeholder="********">
  </div>
  <div class="form-group">
    <label for="inputPassword">Confirmar senha</label>
    <input type="password" class="form-control" id="inputPassword" placeholder="********">
  </div>
  <div class="form-row">
  <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
    <div class="form-group col-md-10">
      <label for="inputEmail4">Nome</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Nome">
    </div>
    </div>
</form></p>
    <a href="#" class="btn btn-primary">Fazer cadastro</a>
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
<div class="row mt-3 text-white text-white">

    <!-- Grid column -->
    <div class="col-md-3 col-lg-4 col-xl-3 mb-4 text-white">

    <!-- Content -->
    <h6 class="text-uppercase font-weight-bold">Nome Da Companhia</h6>
    
    <p>Equipe Astrotec</p>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4 text-white">

    <!-- Links -->
    <h6 class="text-uppercase font-weight-bold">Tecnologias Usadas</h6>
    
    <p>
        <a class="text-white" href="#!">Html</a>
    </p>
    <p>
        <a class="text-white" href="#!">CSS3</a>
    </p>
    <p>
        <a class="text-white" href="#!">PHP 7.4.7</a>
    </p>
    <p>
        <a class="text-white" href="#!">JavaScript</a>
    </p>
    <p>
        <a class="text-white" href="#!">Bootstrap Angular</a>
    </p>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4 text-white">

    <!-- Links -->
    <h6 class="text-uppercase font-weight-bold">Ajuda</h6>
    
    <p>
        <a class="text-white" href="#!">Fale Conosco</a>
    </p>
    <p>
        <a class="text-white" href="#!">Duvidas Frequêntes</a>
    </p>
  

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4 text-white">

    <!-- Links -->
    <h6 class="text-uppercase font-weight-bold">Contato</h6>
    
    <p>
        <i class="fas fa-home mr-3"></i>R. Felíciano de Mendonça, 290 - Guaianases, São Paulo - SP, 08460-365</p>
    <p>
        <i class="fas fa-envelope mr-3"></i> Astrotec@gmail.com</p>
    <p>
        <i class="fas fa-phone mr-3"></i> +55 11 </p>
    <p>
    <i class="fas fa-code mr-3"></i> Astrotec.com.br</p>

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