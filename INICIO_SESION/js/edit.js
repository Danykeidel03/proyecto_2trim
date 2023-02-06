let btn = document.getElementById('crear')
btn.addEventListener('click', inicio)


function inicio(event) {
    event.preventDefault();

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

    let id = localStorage.getItem('id')
    let token = localStorage.getItem('token')


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



