const botones = document.querySelectorAll(".bEliminar");

botones.forEach(boton => {
    boton.addEventListener('click', function(){
        const matricula = this.dataset.matricula;

        const conform = window.confirm("Deseas eliminar al alumno "+ matricula + "?");
        if(confirm){
            httprequest("http://localhost/poo/mvc04/consulta/eliminarAlumno/"+matricula, function(){
                const tbody = document.querySelector("#tbody-alumnos");
                const fila = document.querySelector("#fila-" + matricula);

                tbody.removeChild(fila);
            });
        }else{
            
        }
    });
});

function httprequest(url, callback){
    const http = new XMLHttpRequest();
    http.open('GET', url);
    http.send();

    http.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            callback.apply(http);
        }
    }
}