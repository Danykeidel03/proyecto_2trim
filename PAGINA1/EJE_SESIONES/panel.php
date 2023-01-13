<?php 
    session_start();
    error_reporting(0);
    $varsesion = $_SESSION['usuario'];

    if($varsesion == null || $varsesion = ''){
        echo "No tienes autorizacion";
        die();
    } 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Panel de Administracion</h1>
    <h2>Bienvenido <?php echo $_SESSION['usuario'] ?></h2>
    <a href="cerrar_sesion.php">Cerrar sesion</a>
</body>
</html>