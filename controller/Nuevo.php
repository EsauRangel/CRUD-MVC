<?php
class Nuevo extends Controller{
    function __construct(){
        parent::__construct();
        $this->view->mensaje = "";
    }

    function render(){
        $this->view->render("nuevo/index");
    }
    function registrarAlumno(){
        $matricula = $_POST['matricula'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];

        $mensaje = "";

        if($this->model->insert(['matricula' => $matricula, 'nombre' => $nombre, 'apellido' => $apellido])){
            $mensaje = "Datos insertados";
        }else{
            $mensaje = "Error al insertar datos";
        }

        $this->view->mensaje = $mensaje;
        $this->render();
    }
}
?>