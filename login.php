<?php
    session_start();
    if (isset($_SESSION['user_id'])) {
    header('Location: /PHPELIS1.1/principal.php');
    }
    require 'database.php';
    
    if(!empty($_POST['email']) && !empty($_POST['password'])) {
        $records = $conn->prepare('SELECT email, username, password FROM users WHERE email=:email');
        $records->bindParam(':email', $_POST['email']);
        $records->execute();
        $results = $records->fetch(PDO::FETCH_ASSOC);
        
        $message = '';
        
        if(count($results) > 0 && ($_POST['password'] == $results['password'])) {
            
            $_SESSION['user_id'] = $results['username'];
            header('Location: /PHPELIS1.1/principal.php');
        } else {
            $message = "No coinciden los datos";
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
            <a class="navbar-brand" href="index.php">
                <img src="img/logo.png" class="d-inline-block align-top" alt="Logo PHPELIS">
            </a>
        </div>
    </nav>
     <?php if(!empty($message)): ?>
        <div class="alert alert-success" role="alert">
             <?=$message?>
        </div>
    <?php endif; ?>
    <div class="container-fluid fondoLogin">
        <div class="container fondoOpaco">
            <form action="" method="post">
                <h1>¡Bienvenido!</h1>
                <h3>Inicia sesión</h3>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Correo</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>

               <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input name="password" type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-success">Iniciar sesión</button>
            </form>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>