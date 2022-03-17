<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>My FoodShop</title>

    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/main.css')}}" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
</head>

<body>

  <header>
  
    <div class="navbar navbar-dark bg-dark box-shadow">
        <div class="container d-flex justify-content-between">
            <a href="#" class="navbar-brand d-flex align-items-center">
                <strong>My FoodShop</strong>
            </a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa fa-shopping-cart"></i> Panier</a>
                </li>
            </ul>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light bg-red">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Films</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Séries TV</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Musique</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Jeux-vidéos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Sport</a>
                </li>
            </ul>
        </div>
    </nav>
  </header>  
<body>

<section class="py-5 text-center">
        <div class="container">
            <h1 class="jumbotron-heading">Commandez  votre <br><span style="font-weight: 400;">plat</span><br>Healthy <span style="font-weight: 400;">&</span> équilibré</h1>
            <p class="lead text-muted">Facile, rapide et pas chère :) </p>
        </div>
    </section>

  @yield('ProdsHome')

<footer class="text-center text-lg-start bg-light text-muted">

  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">

    <div class="me-5 d-none d-lg-block">
      <span>Retrouvez tout nos plats et offre aussi sur :</span>
    </div>
    <div>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
    </div>
  </section>

  <section class="">
    <div class="container text-center text-md-start mt-5">
      <div class="row mt-3">
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <h6 class="text-uppercase fw-bold mb-4"><i class="fas fa-gem me-3"></i>My FoodShop</h6>
          <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Imperdiet proin fermentum leo vel.
          </p>
        </div>
        <div class="col-md-4 col-lg-2 col-xl-2 mx-auto mb-4">
          <h6 class="text-uppercase fw-bold mb-4">
            Produits
          </h6>
          <p>
            <a href="#!" class="text-reset">Petit dej</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Dejeuner</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Diner</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Snack</a>
          </p>
        </div>
        <div class="col-md-5 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <h6 class="text-uppercase fw-bold mb-4">
            Contact
          </h6>
          <p><i class="fas fa-home me-3"></i> Av. Habib Bourguiba, Tunis</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            contact@myfoodshop.com
          </p>
          <p><i class="fas fa-phone me-3"></i> + 216 66 666 666</p>
        </div>
      </div>
    </div>
  </section>

  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2021 Copyright: My FoodShop
  </div>
</footer> 

<footer class="text-muted py-5">
  <div class="container">
    <p class="float-end mb-1">
      <a href="#">Back to top</a>
    </p>
  </div>
</footer>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="{{asset('js/holder.min.js')}}" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="{{asset('js/popper.min.js')}}" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  
  </body>
</html>