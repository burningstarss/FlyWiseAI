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

        if(file_exists("./controladores/".ucfirst($controlador)."Controlador.php")){            //Si nos pasan controlador por argumento redirigimos a argumentoControlador.php
            require_once("./controladores/".ucfirst($controlador)."Controlador.php");
            $arg = ucfirst($controlador)."Controlador";
            $contro = new $arg();
        }else{                                                                                  //Si no nos pasan controlador por argumento redirigimos a home
            require_once("./controladores/HomeControlador.php");
            $contro = new HomeControlador();
        }
    }
}