<?php 

Class Error404Controlador{

    public function __construct(Type $var = null) {
        require_once("./vistas/error404.php");
        $vista= new Vista();
                
    }

    public function show(){
        $this->vista->render("error404",array());   
    }
    
}