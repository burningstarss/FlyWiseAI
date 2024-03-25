<?php

class Vista{
    public function __construct(Type $var = null) {
        $this->var = $var;
    }

    public function render($vista,$data){

        //obtener la ruta de los ficheros css y js
        require_once("./assets/config/Enrutador.php");
        $enrutador = new Enrutador();
        $ruta = $enrutador->getRuta();

        if(file_exists("./vistas/".$vista.".php")){
            include_once "./vistas/".$vista.".php";
        }
    }
}