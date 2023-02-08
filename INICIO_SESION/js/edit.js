let btn = document.getElementById('crear')
btn.addEventListener('click', inicio)



function inicio(event) {
    event.preventDefault();

    let id = localStorage.getItem('id')
    let token = localStorage.getItem('token')

    let imputNombre = document.querySelector('#nombre');
    let nombre = imputNombre.value;

    let imputUsu = document.querySelector('#usu');
    let usu = imputUsu.value;

    let inputEstatura = document.querySelector('#estatura');
    let estatura = inputEstatura.value;

    let inputpeso = document.querySelector('#peso');
    let peso = inputpeso.value;

    let inputfecha = document.querySelector('#fecha');
    let fecha = inputfecha.value;

    let inputactiv = document.querySelector('#activ');
    let activ = inputactiv.value;

    let persona = {
        id: id,
        fullname: nombre,
        username: usu,
        height: estatura,
        weight: peso,
        birthday: fecha,
        activities: activ
    }

    console.log(persona);

    let usuario = JSON.stringify(persona);

    fetch(`http://localhost:5000/api/user`, {
        method: 'PUT',
        headers: {
            'Content-Type': 'application/json',
            'Authorization': token
        },
        body: usuario
    })

        .then(response => {
            switch (response.status) {
                case 200:
                    console.log("Actualizado");
                    break;
                case 400:
                    console.log("Id error");
                    break;
                case 401:
                    console.log("Token no valido");
            }
            return response.json();
        })

        .then(data => {
            // let token = data.token;
            // let id = data.id;
            // console.log(token);
            // console.log(id);
            // localStorage.setItem('token', token);
        })

}



let borrar = document.getElementById('borrar')
borrar.addEventListener('click', borrarCuenta)

function borrarCuenta(event) {

    let id = localStorage.getItem('id')
    let token = localStorage.getItem('token')

    console.log(id);

    event.preventDefault();
    fetch(`http://localhost:5000/api/user?id=${id}`, {
        method: 'DELETE',
        headers: {
            'Authorization': token,
        },
    })

        .then(response => {
            switch (response.status) {
                case 200:
                    console.log("Uusario Eliminado");
                    break;
                case 400:
                    console.log("No indicaste el id");
                    break;
                case 404:
                    console.log("No existe el usuario");
                    break;
            }
            return response.json();
        })

        .then(data => {
            localStorage.removeItem('token')
            localStorage.removeItem('id')
            window.location.href = ('http://localhost/dwes/PROYECTO_2TRI/PAGINA1/pagian_inicio.php')
        })


}