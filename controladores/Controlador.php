<?php

Class Controlador{
    public function __construct(Type $var = null){
        $this->var = $var;
    }

    public function main(){

        $controlador = "";
        $accion = "";
        if(isset($_GET["controlador"]) and !empty($_GET["controlador"])){
            $controlador = $_GET["controlador"];
        }else{
            $controlador = "home";
        }

        if(isset($_GET["accion"]) and !empty($_GET["accion"])){
            $accion = $_GET["accion"];
        }else{
            $accion = "";
        }

        if(file_exists("./assets/controladores/".ucfirst($controlador)."Controlador.php")){
            echo "Existe el controlador";
        }else{  
            require_once("./assets/controladores/HomeControlador.php");
            $contro = new HomeControlador();
        }
    }
}