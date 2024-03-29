<?php 

Class Error404Controlador{

    public function __construct(Type $var = null) {
        require_once("./vistas/Vista.php");
        $vista= new Vista();
        $vista->render("error404",array());   
                
    }

    /*public function show(){
        $this->vista->render("error404",array());   
    }*/
    
}