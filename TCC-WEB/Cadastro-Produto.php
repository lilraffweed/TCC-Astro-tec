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
    <h5 class="card-title">Cadastro do produto</h5>
    <p class="card-text"><form>
  <div class="form-group">
    <label for="exampleFormControlInput1">Nome do Produto</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Notebook Positivo">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Categoria do Produto</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Outros</option>
      <option>Brinquedos</option>
      <option>Celulares</option>
      <option>Informatica</option>
      <option>Tv e audio</option>
      <option>Moda e beleza</option>
      <option>Games e livros</option>
      <option>Moveis e decoração</option>
      <option>Eletrodomesticos</option>
      <option>Eletroportaveis</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect2">Quantidade</label>
    <select multiple class="form-control" id="exampleFormControlSelect2">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
  <form>
  <div class="form-group">
    <label for="exampleFormControlFile1">Escolher Foto</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
  </div>
</form>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Descrição do Produto</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
</form></p>
    <a href="#" class="btn btn-primary">Cadastrar</a>
  </div>
</div>    


<!-- <form class="log">
              
               <div class="sim">

                <h2 class="title">Login</h2>

                <input type="text" placeholder="Email" class="inpt" name="txNome" style="width: 50%;">

                <input type="text" placeholder="Senha" class="inpt" name="txNome" style="width: 50%;">

                <button type="button" class="Btn">Enviar</button>
                </div>
            </form> -->


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