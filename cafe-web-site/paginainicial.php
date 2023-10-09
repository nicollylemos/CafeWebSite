<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CupCraft - Início</title>
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.css">
    <link rel="shortcut icon" href="imgs/icone.png" type="image/x-icon"/>
    <link rel="stylesheet" href="css/style/paginainicial.css"/>
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
    <section class="main">
        <div class="main-content">
            <h1>CupCraft</h1>
            <h2>    O encontro perfeito entre sabor e alma.</h2>
            <p>Bem-vindo ao nosso mundo encantado de aromas e sabores, onde cada xícara conta uma história única e cada momento é uma celebração do prazer sensorial. Nossa cafeteria nasceu do amor pela cultura do café e do desejo de criar um refúgio para os apreciadores dessa bebida tão venerada. Cada grão que selecionamos é uma jornada em si mesmo.</p>
            <a href="#content-options"><button id="botao" type="button">Conhecer</button></a>
        </div>
    </section>
    <section class="explore" id="explore">
        <div class="image-content">
                <img src="imgs/cafe.png" class="coffeeimg"/>
                <img src="imgs/background.png" class="backgroundimg"/>
            </div>
        <div class="second-content" id="#second-content">
            <div class="content-coffee" id="content-coffee">
                     <h1 class="subtitle">Explorar</h1>
                    <div class="container text-center">
                        <div class="row align-items-center" id="content-options"> 
                            <div class="col">
                                <i class="fa-solid fa-mug-saucer" style="color: #3a3a3a;"></i>
                                <h3>Menu</h3>
                                <p> O nosso menu é uma sinfonia de sabores cuidadosamente harmonizados para criar uma experiência culinária única. Aqui, cada prato é uma celebração dos ingredientes frescos e da paixão pela gastronomia.</p>
                                <a href="menu.php"><button type="button">Ver Mais</button></a>
                            </div>
                            <div class="col">
                                <i class="fa-regular fa-calendar-days" style="color: #3a3a3a;"></i>
                                <h3>Eventos</h3>
                                <p>Nossa cafeteria não é apenas um lugar para desfrutar de café excepcional e delícias culinárias. É também um espaço onde a comunidade se reúne para celebrar, aprender e compartilhar momentos preciosos. </p>
                                <a href="eventos.php"><button type="button">Ver Mais</button></a>
                            </div>
                            <div class="col">
                                <i class="fa-solid fa-magnifying-glass" style="color: #3a3a3a;"></i>
                                <h3>Sobre nós</h3>
                                <p>Descubra quem somos, o que amamos e o que nos inspira a criar cada xícara de café. Conheça a nossa jornada e seja parte da nossa paixão pelo sabor, enquanto revelamos os faz nossa cafeteria verdadeiramente excepcional.</p>
                                <a href="sobrenos.php"><button type="button">Ver Mais</button></a>
                            </div>
                            <div class="col">
                                <i class="fa-regular fa-images" style="color: #3a3a3a;"></i>
                                <h3>Galeria</h3>
                                <p>Explore nossa galeria repleta de imagens que capturam a essência dos nossos cafés, delícias culinárias e momentos acolhedores. Cada foto conta uma história de sabor e paixão. Aprecie os belos ambientes de nossa loja.</p>
                                <a href="galeria.php"><button type="button">Ver Mais</button></a>
                          </div>
                    </div>
                </div>
            </div>
        </div>
        <div><img src="imgs/wave.png" class="waveimg"/></div>
    </section>

</body>
</html>