<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CupCraft - Galeria</title>
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.js"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.css">
    <link rel="shortcut icon" href="imgs/icone.png" type="image/x-icon"/>
    <link rel="stylesheet" href="css/style/galeri.css"/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
<header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="paginainicial.php">Início</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="menu.php">Menu</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="eventos.php">Eventos</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="sobrenos.php">Sobre nós</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="galeria.php">Galeria</a>
                    </li>   
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
                    <button class="btn btn-outline-secondary" type="submit">Pesquisar</button>
                </form>
                </div>
            </div>
        </nav>
    </header>
    <section class="galery" id="galery">
    <div id="carouselExampleCaptions" class="carousel slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      
      <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="imgs/lugar3.jpg" height="650px"class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Lugares agradáveis</h5>
            <p>A CupCraft é composta por ambientes belos e aconchegantes.</p>
          </div>
        </div>
        <div class="carousel-item">
        <img src="imgs/cafe2.jpg"  height="650px" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Os melhores cafés</h5>
            <p>Os cafés mais bonitos e gostosos da região.</p>
          </div>
        </div>
        <div class="carousel-item">
        <img src="imgs/lugar5.jpg" height="650px" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Conheça nosso espaço</h5>
            <p>A parte externa encanta nossos visitantes.</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <div class="content-galery" id="content-galery">
        <h1>Galeria</h1>
        <p>Acompanhe nossa galeria de fotos.</p>
        <div class="container text-center">
          <div class="row align-items-start">
            <div class="col"><img src="imgs/lugar1.jpg" width="390px" height="280px"id="img1" alt=""></div>
            <div class="col"><img src="imgs/lugar2.jpg" width="390px" height="280px" id="img2" alt=""></div>
            <div class="col"><img src="imgs/lugar4.jpg" width="390px" height="280px" id="img3" alt=""></div>
            <div class="col"><img src="imgs/cafe6.jpg"  width="390px" height="280px" id="img1" alt=""></div>
            <div class="col"><img src="imgs/cafe8.jpg"  width="390px" height="280px"id="img2" alt=""></div>
            <div class="col"><img src="imgs/cafe7.jpg"  width="390px" height="280px" id="img3" alt=""></div>
          </div>
        </div>

    </div>
    </section>

</body>
</html>