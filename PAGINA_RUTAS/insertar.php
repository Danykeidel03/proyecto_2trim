<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    #general {
        width: 100%;
        /* height: 44vh; */
        display: flex;
        justify-content: center;
        align-items: center;
    }

    footer {
        position: fixed;
        bottom: 0;
        width: 100%;
    }

    body {
        margin-top: 0px;
        margin-left: 0px;
        margin-right: 0px;
        margin-bottom: 0px;
    }

    form {
        /* border: 1px solid black; */
        width: 500px;
        height: 350px;
        align-content: center;
        margin-top: 50px;
    }

    label {
        width: 150px;
        padding: 10px;

    }

    input,
    select,
    textarea {
        width: 330px;
        /* padding: 10px; */
    }

    #submit {
        margin-top: 20px;
        width: 200px;
        height: 30px;
        align-self: center;
    }

    #foto {
        width: 100%;
        height: 355px;
    }
</style>

<body>
    <header id="encabezado"></header>
    <img src="img/principio1.png" id="foto">
    <div id="general">
        <form id="form">
            <div id="name">
                <label for="nameInput">Nombre de la ruta</label>
                <input type="text" id="nameInput" />
            </div>

            <div id="file">
                <label for="fileInput">Fichero GPX</label>
                <input name="fileInput" type="file" id="fileInput" />
            </div>

            <div id="desc">
                <label for="descText">Descripción</label>
                <textarea name="descText" id="descText" cols="30" rows="5"></textarea>
            </div>
            <input type="submit" id="submit" value="Submit" />
        </form>
    </div>
    <footer id="footer"></footer>
</body>
<script src="http://localhost/dwes/PROYECTO_2TRI/PAGINA1/footer/añadirheadersfooters.js"></script>
<script src="GPXParser.js"></script>
<script>
    let ficherogpx = document.querySelector('#fileInput');
    document.getElementById('form').addEventListener('submit', function(event) {
        event.preventDefault()
        let fileInput = document.getElementById("fileInput")
        let file = fileInput.files[0];
        let reader = new FileReader();
        reader.onload = function() {
            let gpx = reader.result;
            let parser = new gpxParser();
            parser.parse(gpx)
            let json = parser.tracks[0]
            // console.log(json);

            // Reducimos el número de puntos a aproximadamente 50
            let ratio = Math.round(json.points.length / 50);
            let points = json.points.filter((_, index) => index % ratio == 0);
            let slopes = json.slopes.filter((_, index) => index % ratio == 0);
            let nombreImput = document.getElementById('nameInput')
            let nombre = nombreImput.value;

            let nombredescripcion = document.getElementById('descText')
            let descripcion = nombredescripcion.value;

            let distance = json.distance?.total;
            let max_height = json.elevation?.max;
            let min_height = json.elevation?.min;
            let pos_slope = json.elevation?.pos;
            let neg_slope = json.elevation?.neg;
            let start_lat = json.points[0].lat;
            let start_lon = json.points[0].lon;

            let id = localStorage.getItem('id')

            let puntos = json.points.map( ({lat,lon}) => {
                return {
                    lat,
                    lon
                }
            })


            let ruta = {
                id: id,
                nombre: nombre,
                distancia: distance,
                max_height: max_height,
                min_height: min_height,
                pos_slope: pos_slope,
                neg_slope: neg_slope,
                start_lat: start_lat,
                start_lon: start_lon,
                points: JSON.stringify(puntos),
                descripcion: descripcion,
            }

            let rutaJson = JSON.stringify(ruta);
            console.log(rutaJson);

            fetch('http://localhost/dwes/PROYECTO_2TRI/APIS/rutas.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json;charser=utf-8'
                    },
                    body: rutaJson
                })

                .then(response => {
                    switch (response.status) {
                        case 201:
                            console.log("RUTA CON EXITO");
                            break;
                        case 409:
                            console.log("RUTA EXISTE");
                            break;
                        case 400:
                            console.log("ERROR");
                    }
                    return response.json();

                })

                .then(data => {
                    console.log(data);

                })

        }
        reader.readAsText(file);
        let gpx = new gpxParser();
        gpx.parse("<xml><gpx></gpx></xml>");
    })
</script>

</html>