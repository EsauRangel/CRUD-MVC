const boton = document.querySelector("#bRegistrar");

boton.addEventListener('click', function (e) {
    e.preventDefault();



    const formulario = document.querySelector("#miForm");
    const form = new FormData(formulario);

    const peticion = {
        body: form,
        method: 'POST'
    };
    

    fetch('http://localhost/poo/mvc04/nuevo/registrarAlumno/', peticion)
        .then(res => res.json())
        .then(res => {
        });
        formulario.reset();

        //probar con ajax y no con fetch

});



