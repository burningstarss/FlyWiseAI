<?php 

class signupControlador{

    public function __construct(Type $var = null) {
        require_once("./vistas/Vista.php");
        $vista= new Vista();
        $vista->render("signup",array());
    }
}