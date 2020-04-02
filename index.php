<?php $tituloPagina = "Home - "; ?>
<?php require_once("./inc/head.php"); ?>
<?php require_once("./inc/header.php"); ?>
  <body>
    
    <main>
      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/banner1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Bichinhos em feltro</h5>
        <p>Feitos à mão com o máximo de carinho e amor!</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/banner2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Vestidos em crochê</h5>
        <p>Escolha o modelo, cor e tamanho!</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/banner3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Tapetes em crochê</h5>
        <p>Lindos tapedes artesanais para o quarto do seu bebê!</p>
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
      <article class="card-deck mx-3">
        <h2 class="subtitulo my-3"></h2>
        <div class="card" style="width: 18rem" ;>
          <img src="img/card1.jpg" class="card-img-top" width="324px" height="590px" alt="meu card">
          <div class="card-img-overlay">
            <h3 class="card-title">Bichinhos em Feltro</h3>
            <p class="card-text">Olha que fofura! Bichinhos em feltro! Para seu bebê se encantar!</p>
            <a href="#" class="stretched-link"></a>
          </div>
        </div>
        <div class="card" style="width: 18rem;">
          <img src="img/card2.jpg" class="card-img-top" width="324px" height="590px" alt="meu card">
          <div class="card-img-overlay">
            <h3 class="card-title">Tapetes</h3>
            <p class="card-text">Olha que fofura! Tapetes artesanais para o quarto do seu bebê!</p>
            <a href="#" class="stretched-link"></a>
          </div>
        </div>
        <div class="card" style="width: 18rem;">
          <img src="img/card3.jpg" class="card-img-top" width="324px" height="590px" alt="meu card">
          <div class="card-img-overlay">
            <h3 class="card-title">Vestidos</h3>
            <p class="card-text">Vestidos em crochê! Sua bebê linda neste dia especial! </p>
            <a href="#" class="stretched-link"></a>
          </div>
        </div>
        <div class="card" style="width: 18rem;">
          <img src="img/card4.jpg" class="card-img-top" width="324px" height="590px" alt="meu card">
          <div class="card-img-overlay">
            <h3 class="card-title">Amigurumis</h3>
            <p class="card-text">Amigurumis artesanais em crochê! Do seu jeito e do personagem que quiser! </p>
            <a href="#" class="stretched-link"></a>
          </div>
        </div>
              
      </main>
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
      integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="js/bootstrap.min.js"></script>

  </body>
  <?php require_once("./inc/footer.php"); ?>
  </html>