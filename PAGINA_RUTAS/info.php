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
    p,
    h1,
    h4,
    h3,
    a ,#encabezado,#footer{
        font-family: 'Cinzel', serif;
        /* font: sans-serif; */

    }

    #fondo {
        width: 1000px;
        height: 683px;
        border: 1px black solid;
        /* centrar vertical y horizontalmente */
        margin-top: 1%;
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

    body,html {
        margin-top: 0;
        margin-left: 0;
        margin-bottom: 0;
        margin-right: 0;
    }
</style>

<body>
    <header id="encabezado"></header>
    <?php
    echo "<hr>";
    include_once('funciones.php');

    if (isset($_GET["id"])) {
        $ruta = obtenerRuta($_GET["id"]);

        $nombre = $ruta['route_name'];
        $distancia = $ruta["distance"];
        $max_height = $ruta["max_height"];
        $min_height = $ruta["min_height"];
        $latitud = $ruta["start_lat"];
        $longitud = $ruta["start_lon"];
        $descripcion = $ruta["descripcion"];
        $points = $ruta["points"];
        $replace1 = str_replace('"lat":', '',  $points);
        $replace2 = str_replace('"lon":', '', $replace1);
        $replace3 = str_replace('[', '', $replace2);
        $replace4 = str_replace(']', '', $replace3);
        $replace5 = str_replace('{', '[', $replace4);
        $replace6 = str_replace('}', ']', $replace5);
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
                    <a href='http://localhost/dwes/PROYECTO_2TRI/PAGINA_RUTAS/index.php'>VOLVER</a>
                </div>
            </div>
        ";
        echo "
            <script>
            var map = L.map('map').setView([$latitud,  $longitud], 12);
            L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 19,
                attribution: '&copy; <a href=`http://www.openstreetmap.org/copyright`>OpenStreetMap</a>'
            }).addTo(map);
            var marker = L.marker([$latitud,  $longitud]).addTo(map);
            marker.bindPopup('<b>Ruta: </b> $nombre <br><b>Latitud: </b>$latitud <br><b>Longitud: </b>$longitud').openPopup();
            L.polyline([$replace6], {
                color: 'red',
                weight: 2,
            }).addTo(map);
            </script> 
        ";
    }
    echo "<br><br><br>";
    ?>
    <footer id="footer"></footer>

</body>
<script src="http://localhost/dwes/PROYECTO_2TRI/PAGINA1/footer/añadirheadersfooters.js"></script>

</html>