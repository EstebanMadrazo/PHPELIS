<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    $video = $_GET['video'];
    $titulo = $_GET['titulo'];
    $descrip = $_GET['descrip'];
?>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/estilos.css"/>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="node_modules/@glidejs/glide/dist/css/glide.theme.min.css">
    <link rel="stylesheet" href="css/glide.core.min.css"/>
    <link rel="stylesheet" href="css/glide.theme.min.css"/>
    <title>PHPELIS</title>
  </head>
  <body class="fondo-oscuro">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="principal.php">
                <img src="img/logo.png" class="d-inline-block align-top" alt="Logo PHPELIS">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="principal.php">Inicio</a>
                    <a class="nav-link" href="peliculas.php?video=video/TENET.mp4 & titulo=TENET & descrip=Un agente secreto emprende una misión que se desarrolla más allá del tiempo real, para intentar prevenir una Tercera Guerra Mundial.">Peliculas</a>
                    <a class="nav-link" href="series.php?video=video/WandaVision.mp4 & titulo=Wanda Vision & descrip=WandaVision ​ es una miniserie de televisión estadounidense creada por Jac Schaeffer para el servicio de streaming Disney+, basada en los personajes de Marvel Comics Wanda Maximoff/Bruja Escarlata y Visión.">Series</a>
                    <a class="nav-link active" href="anime.php?video=video/AttackonTitan.mp4 & titulo=Attack on Titan & descrip=La trama gira en torno a Eren Jaeger quien junto a sus amigos de la infancia, decide unirse al ejército con el objetivo de vengar la muerte de su madre y la destrucción de su ciudad a manos de unos seres humanoides llamadas Titanes.">Anime</a>
                    <a class="nav-link" href="logout.php">Cerrar sesión</a>
                </div>
            </div>
        </div>
    </nav>
      
      <div class="container-fluid" style="margin-top: 10%">
          <div class="row align-items-center">
          <div class="header2 col-md-4">
            <h1><?php echo $titulo; ?></h1>
            <p class="d-none d-sm-none d-md-block"><?php echo $descrip; ?></p>
            <a href="#" class="btn btn-light btn-lg">Ver Pelicula</a>
            <button class="btn btn-light btn-lg" type="button" onclick="mutear()"><img src="img/mute.png" alt="x" logoMute/></button>
        </div>
      </div>
      </div>
      
      
    

  <div class="video-container2 container-fluid" style="margin-top: 5%">
      <video id="videoPrincipal" src="<?php echo $video; ?>" muted autoplay loop poster="">
      </video>
  </div>
      
      
      <div class="container" style="text-align: center">
          </br>
          </br>
          <h1>Animes de estreno</h1>
          </br>
          </br>
      </div>    
      
      <div class="container-fluid">
            <div id="carousel3" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
              <li data-bs-target="#carousel3" data-bs-slide-to="0" class="active"></li>
              <li data-bs-target="#carousel3" data-bs-slide-to="1"></li>
              <li data-bs-target="#carousel3" data-bs-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                  <a href="">
                      <img src="img/Anuncios/ShingekiNoKyojin.jpg" class="d-block w-100" alt="...">
                  </a>
                <div class="carousel-caption d-none d-md-block">
                  <h1>Shingeki No Kyojin</h1>
                  <p>Shingeki no Kyojin, también conocida en países de habla hispana como Ataque a los titanes​ y Ataque de los titanes, ​ es una serie de manga escrita e ilustrada por Hajime Isayama.</p>
                </div>
              </div>
              <div class="carousel-item">
                  <a href="">
                      <img src="img/Anuncios/DrStone.jpg" class="d-block w-100" alt="..."> 
                  </a>
                <div class="carousel-caption d-none d-md-block">
                  <h1>Dr.STONE</h1>
                  <p>Dr. Stone, estilizado como Dr. STONE, es un manga de tipo Post Apocalíptico escrito por Riichiro Inagaki e ilustrado por Boichi.</p>
                </div>
              </div>
              <div class="carousel-item">
                  <a href="">
                      <img src="img/Anuncios/Mushoku.jpg" class="d-block w-100" alt="...">
                  </a>
                <div class="carousel-caption d-none d-md-block">
                  <h1>Mushoku Tensei -Isekai Ittara Honki Dasu-</h1>
                  <p>Mushoku Tensei: Isekai Ittara Honki Dasu es una novela web japonesa escrita por Rifujin na Magonote.</p>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carousel3" role="button" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel3" role="button" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </a>
          </div>
        </div>
      
      <div class="container" style="text-align: center">
          </br>
          </br>
          <h1>Animes más vistos</h1>
          </br>
          </br>
      </div> 

        <div class="container-fluid">
            <div class="glide slide3">
                <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides">
                        <li class="glide__slide"><a href="url"><img src="img/Anime/BokuNoHero.jpg" alt="alt"/></a></li>
                        <li class="glide__slide"><a href="url"><img src="img/Anime/DeathNote.jpg" alt="alt"/></a></li>
                        <li class="glide__slide"><a href="url"><img src="img/Anime/BungouStrayDogs.jpg" alt="alt"/></a></li>
                        <li class="glide__slide"><a href="url"><img src="img/Anime/Kakegurui.jpg" alt="alt"/></a></li>
                    </ul>
                </div>
                <div class="glide__arrows" data-glide-el="controls">
                    <button class="glide__arrow glide__arrow--left" data-glide-dir="<">prev</button>
                    <button class="glide__arrow glide__arrow--right" data-glide-dir=">">next</button>
                </div>
                <div class="glide__bullets" data-glide-el="controls[nav]">
                    <button class="glide__bullet" data-glide-dir="=0"></button>
                    <button class="glide__bullet" data-glide-dir="=1"></button>
                    <button class="glide__bullet" data-glide-dir="=2"></button>
                </div>
            </div>
        </div>
      
      
      <div class="container-fluid anuncio3">
        <div class="col-md-12">
          <h1>Kimi No Na Wa</h1>
          <a href="anime.php? video=video/YourName.mp4  & titulo=Kimi no Na wa & descrip=El joven Taki vive en Tokio: la joven Mitsuha, en un pequeño pueblo en las montañas. Durante el sueño, los cuerpos de ambos se intercambian. Recluidos en un cuerpo que les resulta extraño, comienzan a comunicarse." class="btn btn-light btn-lg">Ver más contenido anime</a>
        </div>
      </div>
  
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>  
  <script type="text/javascript">
    
   var video = document.getElementById("videoPrincipal"); 
    
    function mutear(){
        if(!video.muted){
            ///Mute
            video.muted = true; 
        }else{
            //Unmute 
            video.muted = false;
            
        }
    }
    const config = {
                type: 'carousel',
                perView: 4,
                autoplay: 2500,
                breakpoints: {
                    1000: {
                      perView: 3  
                    },
                    800: {
                      perView: 2
                    },
                    500: {
                        perView: 1
                    }
                    
                  }
            };
            var glide3 = new Glide('.slide3', config).mount();
    
    
  </script>
  </body>
</html>