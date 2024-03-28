<?php 
class SignupControlador{

    public function __construct(Type $var = null) {


        $service = new PHPSupabase\Service(
            "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6InBrc3VwaWlpbGx1aHlwcnV1dGthIiwicm9sZSI6ImFub24iLCJpYXQiOjE3MTE2Mjg2MTUsImV4cCI6MjAyNzIwNDYxNX0.dN8MDnQQKytz3ZIf3jnzq4AbOTqNBEpgeuGywKtd7uQ",
            "https://pksupiiilluhypruutka.supabase.co"
        );
        
        $auth = $service->createAuth();

        require_once("./vistas/Vista.php");
        $vista= new Vista();
        $vista->render("signup",array());

    }

}