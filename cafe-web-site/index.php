<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CupCraft - Visitantes</title>
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.css">
    <link rel="shortcut icon" href="imgs/icone.png" type="image/x-icon"/>
    <link rel="stylesheet" href="css/style/style.css"/>
</head>
<body>
  <img width=100% src="https://capsule-render.vercel.app/api?type=waving&color=A04327&height=120&section=header"/>
    <div class="content-info" id="content-info">
    <div class="icone"><i class="fa-regular fa-eye" style="color: #3a3a3a;"></i></div>
      <div>
        <?php
        $numero_visitas_atual = file_get_contents('../cafe-web-site/sec/arq.in');
        file_put_contents('../cafe-web-site/sec/arq.in', ++$numero_visitas_atual);
        echo '<h2> Número de Visitas:'.file_get_contents('../cafe-web-site/sec/arq.in').'</h2>';
        ?>
      </div>      
        <div class="content-text" id="content-text">
        <h1>Bem-vindo à CupCraft!</h1>
      <p>Dê um passo adiante para explorar o acolhedor aroma e sabor que só uma xícara de café artesanal pode oferecer. Estamos empolgados em recebê-lo em nossa cafeteria virtual, onde cada visita é uma jornada sensorial única através do mundo dos cafés especiais.Em CupCraft, acreditamos que cada xícara de café é uma obra-prima em si mesma, criada a partir da combinação perfeita de grãos selecionados, técnicas de torrefação meticulosas e um toque de paixão pela arte do café. Nosso compromisso é proporcionar a você não apenas uma bebida, mas sim uma experiência completa que envolve todos os seus sentidos.Navegue por nosso catálogo diversificado de cafés provenientes das regiões mais renomadas do globo. Desde os tons adocicados das variedades sul-americanas até os aromas intensos dos grãos africanos, cada escolha revela uma história única que mal podemos esperar para compartilhar com você.Além de nossa seleção excepcional de café, a equipe CupCraft está aqui para guiá-lo em sua jornada. De dicas sobre métodos de preparo que realçam os sabores, até sugestões de harmonizações que transformam sua xícara em um momento memorável, estamos prontos para acompanhá-lo a cada gole.Então, prepare-se para se perder nos encantos do café conosco. Explore, descubra e desfrute de uma experiência que aquece o coração e estimula a mente. CupCraft é mais do que uma cafeteria, é um ponto de encontro para os verdadeiros apreciadores do café.Seja bem-vindo a um mundo onde a arte do café é celebrada a cada visita. Estamos ansiosos para sermos parte do seu ritual diário de apreciação e satisfação. Abrace o sabor. Abraçe o aroma. Bem-vindo à CupCraft!</p>
      </div>
      <a href="paginainicial.php"><button type="button">Ver Mais</button></a>
    </div>

</body>
</html>

