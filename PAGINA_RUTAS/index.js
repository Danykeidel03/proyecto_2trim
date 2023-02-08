document.addEventListener('DOMContentLoaded', function () {
    inicio();
})

let formulario = document.forms[0]

let imputNombre = document.querySelector('#name');
let nombre = formulario.elements.name;
nombre.addEventListener("keyup", inicio)

let imputDist = document.querySelector('#dist');
let dist = formulario.elements.dist;
dist.addEventListener("keyup", inicio)

let imputDist1 = document.querySelector('#dist1');
let dist1 = formulario.elements.dist1;
dist1.addEventListener("keyup", inicio)

function inicio() {


    let imputNombre = document.querySelector('#name');
    let nombre = imputNombre.value;

    let imputDist = document.querySelector('#dist');
    let dist = imputDist.value;

    let imputDist1 = document.querySelector('#dist1');
    let dist1 = imputDist1.value;

    fetch(`http://localhost:5000/api/route?name=${nombre}&min_dist=${dist}&max_dist=${dist1}`, {

    })

        .then(response => {
            switch (response.status) {
                case 200:
                    console.log("SACASTE LAS RUTAS");
                    return response.json();
                    break;
                case 401:
                    console.log("NO PUEDES INICIAR SESION");
            }
        })

        .then(data => {
            console.log(data);
            let divRutas = document.getElementById('rutas')
            let str = "";
            data.forEach(element => {
                let nombre = element.route_name;
                let distancia = element.distance
                let max_height = element.max_height;
                let min_height = element.min_height;
                str += `
                <div id='routes'>
                    <div id='fotoRuta'>Foto</div>
                    <div id='nameRuta'><h4>${nombre}</h4></div>
                    <div id='infoRuta'>
                        <div id='dist'><a>Distancia:  </a><a id='dat'>${distancia}</a></div>
                        <div id='max'><a>Altura Maxima:  </a><a id='dat'>${max_height}</a></div>
                        <div id='min'><a>Altura Minima:  </a><a id='dat'>${min_height}</a></div>
                    </div>
                </div>
                `
            });
            divRutas.innerHTML = str
        })

}





