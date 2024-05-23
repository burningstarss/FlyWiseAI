<?php 

require_once 'config/BdConfig.php';
require_once 'vendor/autoload.php';

$service = new PHPSupabase\Service(
    "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6InBrc3VwaWlpbGx1aHlwcnV1dGthIiwicm9sZSI6ImFub24iLCJpYXQiOjE3MTE2Mjg2MTUsImV4cCI6MjAyNzIwNDYxNX0.dN8MDnQQKytz3ZIf3jnzq4AbOTqNBEpgeuGywKtd7uQ",
    "https://pksupiiilluhypruutka.supabase.co" 
);

include_once("controladores/Controlador.php");
$controlador = new Controlador();
$controlador->main();
?>