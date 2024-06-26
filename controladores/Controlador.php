<?php

Class Controlador{
    public function __construct(Type $var = null){
        $this->var = $var;
    }

    public function main(){

        session_start();

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

        if(file_exists("controladores/".ucfirst($controlador)."Controlador.php")){
            //echo "Existe el controlador";
            require_once("./controladores/".ucfirst($controlador)."Controlador.php");
            $nombreClase=ucfirst($controlador)."Controlador";
            $contro= new $nombreClase();

        }else{  
            require_once("controladores/HomeControlador.php");
            $contro = new HomeControlador();
        }
    }
}