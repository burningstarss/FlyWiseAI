<?php 
class ForgotPasswordControlador{

    public function __construct(Type $var = null) {
        require_once("./vistas/Vista.php");
        $vista= new Vista();
        $vista->render("forgotpassword",array());

    }

}