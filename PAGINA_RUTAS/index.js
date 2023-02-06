let btn = document.getElementById('genRutas')
btn.addEventListener('click', inicio)


function inicio(event) {
    event.preventDefault();

    fetch(`http://localhost:5000/api/route`, {
        
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
            let divRutas =document.getElementById('rutas')
            let str = "";
            data.forEach(element => {
                let nombre = element.route_name;
                let distancia = element.distance
                // str += `<h1>${nombre}</h1>`;
                str += `
                <table>
                    <tr>
                        <th colspan='2' id='tablaRutas'>IMAGEN</th>
                    </tr>
                    <tr>
                        <td id='tablaRutas'>${nombre}</td>
                        <td id='tablaRutas'>${distancia}</td>
                    </tr>
                    <tr>
                        <th colspan='2' id='tablaRutas'>VER DETALLES</th>
                    </tr>
                </table>
                `
            });
            divRutas.innerHTML = str
        })

}





