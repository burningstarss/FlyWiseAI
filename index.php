<?php 

require_once 'config/BdConfig.php';
require_once 'vendor/autoload.php';

include_once("controladores/Controlador.php");
$controlador = new Controlador();
$controlador->main();

?>