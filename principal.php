<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

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
                    <a class="nav-link active" href="principal.php">Inicio</a>
                    <a class="nav-link" href="peliculas.php?video=video/TENET.mp4 & titulo=TENET & descrip=Un agente secreto emprende una misión que se desarrolla más allá del tiempo real, para intentar prevenir una Tercera Guerra Mundial.">Peliculas</a>
                    <a class="nav-link" href="series.php?video=video/WandaVision.mp4 & titulo=Wanda Vision & descrip=WandaVision ​ es una miniserie de televisión estadounidense creada por Jac Schaeffer para el servicio de streaming Disney+, basada en los personajes de Marvel Comics Wanda Maximoff/Bruja Escarlata y Visión.">Series</a>
                    <a class="nav-link" href="anime.php?video=video/AttackonTitan.mp4 & titulo=Attack on Titan & descrip=La trama gira en torno a Eren Jaeger quien junto a sus amigos de la infancia, decide unirse al ejército con el objetivo de vengar la muerte de su madre y la destrucción de su ciudad a manos de unos seres humanoides llamadas Titanes.">Anime</a>
                    <a class="nav-link" href="logout.php">Cerrar sesión</a>
                </div>
            </div>
        </div>
    </nav>
      
      <div class="container-fluid" style="margin-top: 5%">
          <div class="row align-items-center">
          <div class="header1 col-md-4">
            <h1>Avengers: Endgame</h1>
            <p class="d-none d-sm-none d-md-block">Los Vengadores restantes deben encontrar una manera de recuperar a sus aliados para un enfrentamiento épico con Thanos, el malvado que diezmó el planeta y el universo.</p>
            <a href="pagina.php?video=https://www.youtube.com/embed/KCSNFZKbhZE &titulo=Avengers: Endgame &descrip=Los Vengadores restantes deben encontrar una manera de recuperar a sus aliados para un enfrentamiento épico con Thanos, el malvado que diezmó el planeta y el universo" class="btn btn-light btn-lg">Ver Pelicula</a>
            <button class="btn btn-light btn-lg" type="button" onclick="mutear()"><img src="img/mute.png" alt="x" logoMute/></button>
        </div>
      </div>
      </div>
      
      
    

  <div class="video-container1 container-fluid" style="margin-top: 5%">
      <video id="videoPrincipal" src="video/Endgame.mp4" muted autoplay loop poster="">
      </video>
  </div>
      
      
      <div class="container" style="text-align: center">
          <h1>Películas de estreno</h1>
          </br>
          </br>
      </div>    
      
      <div class="container-fluid">
            <div id="carousel1" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
              <li data-bs-target="#carousel1" data-bs-slide-to="0" class="active"></li>
              <li data-bs-target="#carousel1" data-bs-slide-to="1"></li>
              <li data-bs-target="#carousel1" data-bs-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                  <a href="">
                      <img src="img/Anuncios/Avengers_IW.jpg" class="d-block w-100" alt="...">
                  </a>
                <div class="carousel-caption d-none d-md-block">
                  <h1>Avengers: Infinity War</h1>
                  <p>Los superhéroes se alían para vencer al poderoso Thanos, el peor enemigo al que se han enfrentado. Si Thanos logra reunir las seis gemas del infinito: poder, tiempo, alma, realidad, mente y espacio, nadie podrá detenerlo.</p>
                </div>
              </div>
              <div class="carousel-item">
                  <a href="pagina.php? video=https://www.youtube.com/embed/AZGcmvrTX9M & titulo=TENET & descrip=Un agente secreto emprende una misión que se desarrolla más allá del tiempo real, para intentar prevenir una Tercera Guerra Mundial.">
                     <img src="img/Anuncios/Tenet.jpg" class="d-block w-100" alt="..."> 
                  </a>
                <div class="carousel-caption d-none d-md-block">
                  <h1>TENET</h1>
                  <p>Un agente secreto emprende una misión que se desarrolla más allá del tiempo real, para intentar prevenir una Tercera Guerra Mundial.</p>
                </div>
              </div>
              <div class="carousel-item">
                  <a href="">
                      <img src="img/Anuncios/WW1984.jpg" class="d-block w-100" alt="...">
                  </a>
                <div class="carousel-caption d-none d-md-block">
                  <h1>Wonder Woman 1984</h1>
                  <p>Diana Prince, conocida como Wonder Woman se enfrenta a Cheetah, una villana que posee fuerza y agilidad sobrehumanas.</p>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carousel1" role="button" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel1" role="button" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </a>
          </div>
        </div>
      
      <div class="container" style="text-align: center">
          </br>
          </br>
          <h1>Películas más vistas</h1>
          </br>
          </br>
      </div>
  
  <div class="container-fluid">
            <div class="glide slide1">
                <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides">
                        <li class="glide__slide"><a href=""><img src="img/Peliculas/SuperHeroes/Spider-Man_HC.jpg" alt="alt" /></a></li>
                        <li class="glide__slide"><a href="pagina.php?video=https://www.youtube.com/embed/xOsLIiBStEs &titulo=Soul &descrip=¿Alguna vez te has preguntado acerca del origen de tus sueños, intereses y pasiones? ¿Qué es aquello que te hace único?"><img src="img/Peliculas/Animacion/Soul.jpg" alt="alt"/></a></li>
                        <li class="glide__slide"><a href=""><img src="img/Peliculas/Accion/JohnWick3.jpg" alt="alt"/></a></li>
                        <li class="glide__slide"><a href=""><img src="img/Peliculas/Animacion/Spider-Man_SV.jpg" alt="alt"/></a></li>
                    </ul>
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
    </div>  
      
      <div class="container-fluid anuncio1">
        <div class="col-md-12">
          <h1>Spider-Man: Far From Home</h1>
          <a href="peliculas.php?video=video/SPIDER-MAN_FFH.mp4 & titulo=Spider-Man: Far From Home&descrip=Peter Parker decide pasar unas merecidas vacaciones en Europa junto a MJ, Ned y el resto de sus amigos. Sin embargo, Peter debe volver a ponerse el traje de Spider-Man cuando Nick Fury le encomienda una nueva misión: frenar el ataque de unas criaturas que están causando el caos en el continente." class="btn btn-light btn-lg">Ver mas películas</a>
        </div>
      </div>
      
      
      <div class="container" style="text-align: center">
          </br>
          </br>
          <h1>Series de estreno</h1>
          </br>
          </br>
      </div>    
      
      <div class="container-fluid">
            <div id="carousel2" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
              <li data-bs-target="#carousel2s" data-bs-slide-to="0" class="active"></li>
              <li data-bs-target="#carousel2" data-bs-slide-to="1"></li>
              <li data-bs-target="#carousel2" data-bs-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                  <a href="">
                      <img src="img/Anuncios/WandaVision.jpg" class="d-block w-100" alt="...">
                  </a>
                <div class="carousel-caption d-none d-md-block">
                  <h1>Wanda Vision</h1>
                  <p>WandaVision ​ es una miniserie de televisión estadounidense creada por Jac Schaeffer para el servicio de streaming Disney+, basada en los personajes de Marvel Comics Wanda Maximoff/Bruja Escarlata y Visión.</p>
                </div>
              </div>
              <div class="carousel-item">
                  <a href="pagina.php? video=https://www.youtube.com/embed/Wre1F5YyIlA &titulo=Stranger Things &descrip=Cuando un niño desaparece, sus amigos, la familia y la policía se ven envueltos en una serie de eventos misteriosos al tratar de encontrarlo. Su ausencia coincide con el avistamiento de una criatura terrorífica y la aparición de una extraña niña.">
                      <img src="img/Anuncios/StrangerThings.jpg" class="d-block w-100" alt="..."> 
                  </a>
                <div class="carousel-caption d-none d-md-block">
                  <h1>Stranger Things</h1>
                  <p>Cuando un niño desaparece, sus amigos, la familia y la policía se ven envueltos en una serie de eventos misteriosos al tratar de encontrarlo. Su ausencia coincide con el avistamiento de una criatura terrorífica y la aparición de una extraña niña.</p>
                </div>
              </div>
              <div class="carousel-item">
                  <a href="">
                      <img src="img/Anuncios/Rick&Morty.jpg" class="d-block w-100" alt="...">
                  </a>
                <div class="carousel-caption d-none d-md-block">
                  <h1>Rick y Morty</h1>
                  <p>Después de haber estado desaparecido durante casi 20 años, Rick Sánchez llega de imprevisto a la puerta de la casa de su hija Beth y se va a vivir con ella y su familia utilizando el garaje como su laboratorio personal.</p>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carousel2" role="button" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel2" role="button" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </a>
          </div>
        </div>
      
      <div class="container" style="text-align: center">
          </br>
          </br>
          <h1>Series más vistas</h1>
          </br>
          </br>
      </div> 

        <div class="container-fluid">
            <div class="glide slide2">
                <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides">
                        <li class="glide__slide"><a href="url"><img src="img/Series/DrHouse.jpg" alt="alt"/></a></li>
                        <li class="glide__slide"><a href="url"><img src="img/series/SexEducation.jpg" alt="alt"/></a></li>
                        <li class="glide__slide"><a href="url"><img src="img/series/GoodDoctor.jpg" alt="alt"/></a></li>
                        <li class="glide__slide"><a href="pagina.php? video=https://www.youtube.com/embed/tcrNsIaQkb4 &titulo=The Boys &descrip=Cuando los superhéroes abusan de sus superpoderes en lugar de usarlos para el bien, The Boys se embarcan en una búsqueda heroica para exponer secretos."><img src="img/series/TheBoys.jpg" alt="alt"/></a></li>
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
      
      
      <div class="container-fluid anuncio2">
        <div class="col-md-12">
          <h1>The Mandalorian</h1>
          <a href="series.php?video=video/TheMandalorian.mp4 & titulo=The Mandalorian & descrip=Las aventuras de Mando, un pistolero solitario y cazarrecompensas que se abre paso a través de las fronteras más remotas de la galaxia, lejos de la jurisdicción de la Nueva República." class="btn btn-light btn-lg">Ver más series</a>
        </div>
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
                  <a href="pagina.php?video=https://www.youtube.com/embed/FRn6xXXF-7s &titulo=Attack on Titan &descrip=La trama gira en torno a Eren Jaeger quien junto a sus amigos de la infancia, decide unirse al ejército con el objetivo de vengar la muerte de su madre y la destrucción de su ciudad a manos de unos seres humanoides llamadas Titanes.">
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
            var glide1 = new Glide('.slide1', config).mount();
            var glide2 = new Glide('.slide2', config).mount();
            var glide3 = new Glide('.slide3', config).mount();
    
    
  </script>
  </body>
</html>