
<?php
    session_start();
    require 'database.php';
    
    if(isset($_SESSION['user_id'])) {
        $records = $conn->prepare('SELECT email, username, password FROM users WHERE username=:username');
        $records->bindParam(':username', $_SESSION['user_id']);
        $records->execute();
        $results = $records->fetch(PDO::FETCH_ASSOC);
        $user = null;
        
        if(count($results) > 0) {
            $user = $results;
        }
    }
    
    $message = '';

    if(!empty($_POST['email']) && !empty($_POST['username']) && !empty($_POST['password'])) {
        
        $sql = "INSERT INTO users (email, username, password) VALUES ( :email, :username, :password)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':email', $_POST['email']);
        $stmt->bindParam(':username', $_POST['username']);
        $stmt->bindParam(':password', $_POST['password']);
        
        
        if($stmt->execute()) {
            $message = '¡Creación de nuevo usuario exitoso! inicie sesión';
        } else {
            $message = 'Hubo algún error';
        }
        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Project Web</title>
    <link href="css/estilos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body class="fondo-oscuro">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="img/logo.png" class="d-inline-block align-top" alt="Logo PHPELIS">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <div class="position-absolute top-50 end-0 translate-middle-y" style="margin-right: 30px">
                        <a href="login.php" class="btn btn-success">Iniciar sesión</a>
                        <a href="logout.php" class=" btn btn-danger">Cerrar sesión</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
     <?php if(!empty($message)): ?>
        <div class="alert alert-success" role="alert">
             <?=$message?>
        </div>
    <?php endif; ?>
    <div class="container-fluid fondoLogin">
        <div class="container fondoOpaco">
            <form action="index.php" method="post">
                <h1>Películas y series ilimitadas y mucho más.</h1>
                <h3>¡Registrate Ya!</h3>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Correo</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">Nunca compartiremos su correo electrónico con nadie más.</div>
                </div>
                
                <div class="mb-3">
                    <label for="validationCustomUsername" class="form-label">Username</label>
                    <div class="input-group has-validation">
                      <span class="input-group-text" id="inputGroupPrepend">@</span>
                      <input name="username" type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                      <div class="invalid-feedback">
                        Por favor escoja un nombre de usuario
                      </div>
                    </div>
                </div>

               <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input name="password" type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-success">Registrar</button>
            </form>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>

