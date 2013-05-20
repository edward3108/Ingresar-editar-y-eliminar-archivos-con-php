<?php
//error_reporting(E_ALL ^ E_NOTICE);
require_once("funciones.php");
$instancia=new consultas();

$instancia->eliminar($_GET['id']);
?>
