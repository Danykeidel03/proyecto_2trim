let btn = document.getElementById('crear')
btn.addEventListener('click', inicio)


function inicio(event) {
    event.preventDefault();

    let imputUsu = document.querySelector('#usu');
    let usu = imputUsu.value;

    let contraseña = document.querySelector('#pass');
    let pass = contraseña.value;
    console.log(pass);

    let persona = {
        username: usu,
        pass: pass,
    }

    console.log(persona);

    let usuario = JSON.stringify(persona);

    // fetch(`http://localhost:5000/api/checkuser?username=${usu}`, {
    //     method: 'GET',
    //     headers: {
    //         'Content-Type': 'application/json'
    //     },
    //     // body: usuario
    // })

    //     .then(response => {
    //         switch (response.status) {
    //             case 200:
    //                 console.log("USUARIO EXISTENTE");
    //                 break;
    //             case 400:
    //                 console.log("ERROR");
    //         }
    //         return response.json();
    //     })

    //     .then(data => {
    //         console.log(data);
    //     })


    fetch(`http://localhost:5000/api/login`, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: usuario
    })

        .then(response => {
            switch (response.status) {
                case 200:
                    console.log("SESION INICIADA");
                    break;
                case 401:
                    console.log("NO PUEDES INICIAR SESION");
            }
            return response.json();
        })

        .then(data => {
            let token = data.token;
            let id = data.id;
            console.log(token);
            console.log(id);
            localStorage.setItem('token', token);
            localStorage.setItem('id', id);

        })

}





