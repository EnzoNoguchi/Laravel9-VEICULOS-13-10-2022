<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <title>Loja de Veiculos</title>
</head>

<body>






<!----------------------------MENU------------------------->


<header>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="home">Loja de Veículos</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>


  

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">



        <li class="nav-item dropdown">

          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">

            Carros

          </a>

          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

            <li><a class="dropdown-item" href="home">Menu</a></li>

            <li><hr class="dropdown-divider"></li>

            <li><a class="dropdown-item" href="ListarCarro">Lista de Carros</a></li>

            <li><a class="dropdown-item" href="cadastrarCarro">Cadastrar Carros</a></li>

            <li><a class="dropdown-item" href="editarCarro">Editar/Excluir Carros</a></li>

          </ul>

        </li>








        <li class="nav-item dropdown">

<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">

  Caminhões

</a>

<ul class="dropdown-menu" aria-labelledby="navbarDropdown">

  <li><a class="dropdown-item" href="home">Menu</a></li>

  <li><hr class="dropdown-divider"></li>

  <li><a class="dropdown-item" href="">Lista de Caminhões</a></li>

  <li><a class="dropdown-item" href="">Cadastrar Caminhões</a></li>

  <li><a class="dropdown-item" href="">Editar/Excluir Caminhões</a></li>

</ul>

</li>
    
      
        
      </ul>
      
    </div>
  </div>
</nav>
</header>


<!--------------------------------------------------------------------------->



<div class="principal">
<div class="card bg-dark text-white">
  <img src="{{'/img/MarcaWallpaper.png'}}" class="card-img" alt="...">
  <div class="card-img-overlay">
  
  </div>
</div>
</div>










<h1><p class="text-center">Nossos Pordutos</p></h1>









<div class="listaCarro">
<div class="row row-cols-1 row-cols-md-2 g-4">
  <div class="col">
    <div class="card">
      <img src="{{'/img/carroVenda1.jpg'}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">1969 Dodge Charger</h5>
        <p class="card-text"><h1>R$500.000</h1></p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="{{'/img/carroVenda2.jpg'}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Plymouth Barracuda 1970</h5>
        <p class="card-text"><h1>R$1.700.000</h1></p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="{{'/img/carroVenda3.jpg'}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Plymouth Suberbird</h5>
        <p class="card-text"><h1>R$600.000</h1></p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="{{'/img/carroVenda4.jpg'}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Ford Mustang FastBack 1969</h5>
        <p class="card-text"><h1>R$500.000</h1></p>
      </div>
    </div>
  </div>
</div>
</div>








<footer class="text-center text-lg-start bg-dark text-muted">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <!-- Left -->
    
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>Loja de Veículos
          </h6>
          <p>
            Entre em contato conosco atravez das nossas redes de contato!
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Nossos Produtos
          </h6>
          <p>
            <a href="ListarCarro" class="text-reset">Produtos</a>
          </p>
          <p>
            <a href="cadastrarCarro" class="text-reset">Buscar</a>
          </p>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Nossas Redes Sociais
          </h6>
          <p>
            <a href="#!" class="text-reset">Facebook</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Instagram</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Twitter</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contato</h6>
          <p><i class="fas fa-home me-3"></i> São Paulo, Santo André 3012, BR</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            lojaveiculos@example.com
          </p>
          <p><i class="fas fa-phone me-3"></i> (11) 58242897642</p>
          <p><i class="fas fa-print me-3"></i> (55) 35253252525</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/"></a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->














<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>