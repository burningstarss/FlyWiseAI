<?php 

Class Error500Controlador{

    public function __construct(Type $var = null) {
        require_once("./vistas/Vista.php");
        $vista= new Vista();
        $vista->render("error500",array());   
                
    }
    
}