<html>
    <head>
        <meta charset="utf-8">
        <title>Troca Facil</title>
        <link rel="stylesheet" href="css/css.css">
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


<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active" data-interval="10000">
      <img src="img/people-2603663_640.jpg" height="60%" class="d-block w-100" alt="Estamos trabalhando para consertar">
      <div class="carousel-caption d-none d-md-block">
        <h5>Serviços</h5>
        <p>Nossos serviços ajudam nossos clientes a encontrar outras pessoas para poder trocar produtos</p>
      </div>
    </div>
    <div class="carousel-item" data-interval="10000">
      <img src="img/photographer-2179204_640.jpg" height="60%" class="d-block w-100" alt="Estamos trabalhando para consertar">
      <div class="carousel-caption d-none d-md-block">
        <h5>Produtos</h5>
        <p>Os produtos mostrados são de clientes para trocas, com fotos tiradas pelos mesmos</p>
      </div>
    </div>
    <div class="carousel-item" data-interval="10000">
      <img src="img/honey-5043708_640.jpg" height="60%" class="d-block w-100" alt="Estamos trabalhando para consertar">
      <div class="carousel-caption d-none d-md-block">
        <h5>Mensagens</h5>
        <p>Mande mensagem de onde estiver para quem vc for fazer a trocar</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<br/>
<br/>

<div class="container" style="padding-top: 50px;">
        
        <div class="row">
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
            <h5 class="text-center">Preço: R$ 2.100,00</h5>
            <a href="#" class="btn buy">Visualizar</a>
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
            <h5 class="text-center">Preço: R$ 3.000,00</h5>
            <a href="#" class="btn buy">Visualizar</a>
          </div>
          <!-- ./Produto -->
    
          <!-- Produto  -->
          <div class="col-md-4 product-grid">
            <div class="image">
              <a href="#">
                <img src="img/imac.jpg" class="w-100">
                <div class="overlay">
                  <div class="detail">Ver Mais</div>
                </div>
              </a>
            </div>
            <h5 class="text-center">Apple iMac</h5>
            <h5 class="text-center">Preço: R$ 3.000,00</h5>
            <a href="#" class="btn buy">Visualizar</a>
          </div>
          <!-- ./Produto -->
    
          <!-- Produto  -->
          <div class="col-md-4 product-grid">
            <div class="image">
              <a href="#">
                <img src="img/ipad.jpg" class="w-100">
                <div class="overlay">
                  <div class="detail">Ver Mais</div>
                </div>
              </a>
            </div>
            <h5 class="text-center">Apple iPad</h5>
            <h5 class="text-center">Preço: R$ 4.770,00</h5>
            <a href="#" class="btn buy">Visualizar</a>
          </div>
          <!-- ./Produto -->
    
          <!-- Produto  -->
          <div class="col-md-4 product-grid">
            <div class="image">
              <a href="#">
                <img src="img/iphone.jpg" class="w-100">
                <div class="overlay">
                  <div class="detail">Ver Mais</div>
                </div>
              </a>
            </div>
            <h5 class="text-center">Apple iPhone X</h5>
            <h5 class="text-center">Preço: R$ 4.600,00</h5>
            <a href="#" class="btn buy">Visualizar</a>
          </div>
          <!-- ./Produto -->
    
          <!-- Produto  -->
          <div class="col-md-4 product-grid">
            <div class="image">
              <a href="#">
                <img src="img/macbook.jpg" class="w-100">
                <div class="overlay">
                  <div class="detail">Ver Mais</div>
                </div>
              </a>
            </div>
            <h5 class="text-center">Apple MacBook</h5>
            <h5 class="text-center">Preço: R$ 14.300,00</h5>
            <a href="#" class="btn buy">Visualizar</a>
          </div>
          <!-- ./Produto -->
    
        </div>
    
      </div>
    

<!-- <div class="produtos">

   tem q tirar as fotos pra f azer o cadastro do produto
  e n sei se precisa de tudos esses cards 

<div class="card-deck">
  <div class="card">
    <img src="#" class="card-img-top" alt="Trocar a imagem por imagem cadastrada">
    <div class="card-body">
      <h5 class="card-title">Nome Produto</h5>
      <p class="card-text">Descrição Produto</p>
      <button class="button" href="produto"></button>
    </div>
  </div>
  <div class="card">
    <img src="img/honda.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
    </div>
  </div>
  <div class="card">
    <img src="img/honda.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
    </div>
  </div>
</div>   -->

<!-- dois cards em uma linha -->
<!-- <div class="row">
  <div class="col-sm-4">
    <div class="card">
    <img src="img/honda.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
    <img src="img/honda.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
      </div>
    </div>
  </div>
</div> -->

<!-- tres cards numa linha -->
<!-- <div class="card" style="width: 18rem;">
  <img src="img/honda.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>

</div>
<div class="card" style="width: 18rem;">
  <img src="img/honda.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <img src="img/honda.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div> -->


</div>

<br/>
<br/>
<br/>
<br/>

<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>

<br/>

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