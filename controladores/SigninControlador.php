<?php 

class SigninControlador{

    public function __construct(Type $var = null) {
        require_once("./vistas/Vista.php");
        $vista= new Vista();
        $vista->render("signin",array());
    }

    public function irASignUp(){
        require_once("./vistas/Vista.php");
        $vista= new Vista();
        $vista->render("signup",array());
    }
}