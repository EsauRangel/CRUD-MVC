const bActualizar = document.querySelector("#actualizar");
bActualizar.addEventListener('click', function(){
    const formulario = document.querySelector("#form-actualizar");
    const form = new FormData(formulario);

    const datos = {
        body: form,
        method: 'POST'
    };

    fetch('http://localhost/poo/mvc04/consulta/actualizarAlumno/', datos)
        then(data => data.json())
        the(data => {

        })

});