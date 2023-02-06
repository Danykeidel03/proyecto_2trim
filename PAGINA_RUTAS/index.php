<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@600&display=swap" rel="stylesheet">

</head>

<style>
    p,
    h1,
    h4,
    a {
        font-family: 'Cinzel', serif;
    }

    #foto {
        width: 100%;
        height: 800px;
    }

    #foto {
        width: 100%;
        height: 900px;
    }

    #letras_img {
        position: absolute;
        margin-top: -900px;
        left: 2%;
        color: white;
        font: sans-serif;
    }

    #lista {
        position: absolute;
        top: 70%;
        left: 20%;
        font-size: 20px;
    }

    #titulo {
        font-size: 70px;
    }

    body {
        margin-top: 0px;
        margin-left: 0px;
        margin-right: 0px;
        margin-bottom: 0px;
    }
    h1{
        text-align: center;
    }
    
    #tablaRutas {
        border: 1px black solid ;
        width: 100px;
        height: 100px;
    }
</style>

<body>
    <?php
    include('../PAGINA1/footer/header.php');
    ?>
    <div id="conGeneral">

        <!-- Imagen de fono y al principio de la pagina -->
        <img src="img/principio.png" id="foto">

        <!-- letras blancas dentro de la imagen -->
        <div id="letras_img">
            <p id="titulo">TODAS LAS RUTAS DISPONIBLES</p>
        </div>

        <h1>RUTAS</h1>
        <button id="genRutas">Generar Rutas</button>
        <hr>

        <div id="rutas">
        </div>
    </div>
    <br>
    <?php
    include('../PAGINA1/footer/footer.php');
    ?>
</body>

<script src="index.js"></script>

</html>