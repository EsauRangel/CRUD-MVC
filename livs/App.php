<?php
class App
{
    function __construct()
    {

        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, '/');
        $url = explode('/', $url);

        //Cuando se ingresa sin un controlador
        if (empty($url[0])) {
            $archivoController = "controller/Main.php";
            require_once $archivoController;
            $controller = new Main();
            $controller->loadModel('main');
            $controller->render();
            return false;
        }

        $fileController = "controller/" . $url[0] . ".php";

        if (file_exists($fileController)) {
            require_once $fileController;

            //Inicializar controlador
            $controller = new $url[0];
            $controller->loadModel($url[0]);

            $nparam = sizeof($url);
            //Numero de elementos del  arreglo
            if($nparam > 1){
                if($nparam > 2){
                    $param = [];
                    for($i = 2; $i < $nparam; $i++){
                        array_push($param, $url[$i]);
                    }
                    $controller->{$url[1]}($param);
                }else{
                    $controller->{$url[1]}();
                }
            }else{
                $controller->render();
            }

            //Cargar métodos
            
        } else {
            require_once "controller/Errores.php";
            $Error = new Errores();
        }
    }
}
