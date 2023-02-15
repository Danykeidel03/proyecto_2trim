<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
    <title>Document</title>
</head>
<style>
    #fondo {
        width: 1000px;
        height: 800px;
        border: 1px black solid;
        /* centrar vertical y horizontalmente */
        margin-top: 4%;
        margin-left: auto;
        margin-right: auto;
        /* border-radius: 25px; */
        background-color: white;
        box-shadow: 2px 2px 0px black;
    }

    #map {
        width: 550px;
        height: 100%;
        border: 1px black solid;
        /* border-radius: 25px; */
        float: right;
    }

    h1 {
        margin-left: 10px;
    }
</style>

<body>

    <?php
    if ($_GET["nombre"]) {
        $nombre = $_GET["nombre"];
        $distancia = $_GET["distancia"];
        $max_height = $_GET["max_height"];
        $min_height = $_GET["min_height"];
        $latitud = $_GET["latitud"];
        $longitud = $_GET["longitud"];
        $descripcion = $_GET["descripcion"];
        $points = $_GET["points"];
        echo "
            <div id='fondo'>
            <div id='map'></div>
                <div id='datos'>
                    <h1>$nombre</h1>
                    <hr>
                    <p>Distancia: $distancia</p>
                    <p>Altura maxima: $max_height</p>
                    <p>altura Minima: $max_height</p>
                    <p>Latitud en el Mapa:: $latitud</p>
                    <p>Londitud en el Mapa: $longitud</p>
                    <p>Descripcion: $descripcion</p>
                    <p>Puntos: $points</p>
                    <a href='http://localhost/dwes/PROYECTO_2TRI/PAGINA_RUTAS/index.php'>VOLVER</a>
                </div>
            </div>
        ";
        echo "
            <script>
            var map = L.map('map').setView([$latitud,  $longitud], 13);
            L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 19,
                attribution: '&copy; <a href=`http://www.openstreetmap.org/copyright`>OpenStreetMap</a>'
            }).addTo(map);
            var marker = L.marker([$latitud,  $longitud]).addTo(map);
            marker.bindPopup('<b>Ruta: </b> $nombre <br><b>Latitud: </b>$latitud <br><b>Longitud: </b>$longitud').openPopup();
            </script> 
        ";
    }

    ?>
</body>
</html>