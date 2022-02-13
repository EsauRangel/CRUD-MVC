<?php
class View{
    function __construct(){  
    }

    function render($name){
        $url = "view/" . $name . ".php";
        if(file_exists($url)){
            require $url;
        }
    }
}

?>