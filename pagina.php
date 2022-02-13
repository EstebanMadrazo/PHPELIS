<?php
$video = $_GET['video'];
$titulo = $_GET['titulo'];
$descrip = $_GET['descrip'];

$mysqli = new mysqli('localhost', 'root', '', 'phpelis_database');


if (!$mysqli) {
    $estado = "ERROR, no se ha podido realizar la conexión";
} else {
    $sql = "SELECT * from  peliculas where nombrePelicula='$titulo'";
    $result = $mysqli->query($sql);
    while ($row = mysqli_fetch_array($result)) { 
        $calif = $row['calificacionPelicula']; 
    }
    if(!empty($_POST['calificacionDeUsuario'])){
        $calificacion = $_POST["calificacionDeUsuario"];
        if ($calificacion > 100 || $calificacion < 0) {
        $estado = "La calificacion debe ser entre 0 a 100";
        } else {
            $sql = "SELECT * from  peliculas where nombrePelicula='$titulo'";
            $califTotal = 0;
            $totalVotatntes = 0;
            $califProm = 0;
            $result = $mysqli->query($sql);
            while ($row = mysqli_fetch_array($result)) {
                $califTotal = $row['califTotal'];
                $totalVotantes = $row['totalVotantes'];
                $totalVotantes = $totalVotantes + 1;
                $califTotal = $califTotal + $calificacion;
                $califTotal = number_format($califTotal, 2);
                $califProm = $califTotal / $totalVotantes;
                $califProm = number_format($califProm, 2);
                if ($result->num_rows > 0) {
                    $sql2 = "update peliculas set califTotal = '$califTotal', calificacionPelicula = '$califProm', totalVotantes = '$totalVotantes' where nombrePelicula = '$titulo'";
                    $resultado2 = $mysqli->query($sql2);
                    if ($resultado2) {
                        $estado = "Se ha registrado la calificacion con exito";
                    }else{
                        $estado = "Error al intentar actualizar";
                    }
                }
            }
        }
        $mysqli->close();
    }
}

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
    <?php if(!empty($estado)): ?>
        <div class="alert alert-success" role="alert">
             <?=$estado?>
        </div>
    <?php endif; ?>
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
                    <a class="nav-link" href="anime.php?video=video/AttackonTitan.mp4 & titulo=Attack on Titan & descrip=La trama gira en torno a Eren Jaeger quien junto a sus amigos de la infancia, decide unirse al ejército con el objetivo de vengar la muerte de su madre y la destrucción de su ciudad a manos de unos seres humanoides llamadas Titanes.">Anime</a>
                    <a class="nav-link" href="logout.php">Cerrar sesión</a>
                </div>
            </div>
        </div>
    </nav>
      
      
      

  <div class="container-fluid" style="margin-top: 0%">
    
    <iframe width="100%" height="100%" src=<?php echo $video;?> frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

  </div>
      
      
      <div class="container" style="text-align: center">
          </br>
          </br>
          <h1><?php echo $titulo;?></h1>
          <h5><?php echo $descrip;?></h5>
          </br>
          </br>
      </div>
      
      <div class="container" style="text-align: center">
          </br>
          </br>
            <h1>Calificación : <?php echo $calif;?> </h1>
            </br>
          </br>
      </div>
      
      <div class="container" style="text-align: center">
          </br>
          </br>
            <h1>¿Desea calificar este título?</h1>
            <form action="" method="post" enctype="multipart/form-data" name="INSERTAR NAME" id="insertaID">
                <label for="calificacionDeUsuario" class="form-label">Inserte su calificacion:</label>
                <input type="number" class="form-control" name="calificacionDeUsuario">
                <button type="submit" class="btn btn-success">Calificar!</button>
            </form>
            </br>
            </br>
      </div>
      
      
      
      
  
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>  
  </body>
</html>
