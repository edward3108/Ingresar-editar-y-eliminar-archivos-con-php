<?php
require_once("funciones.php");
$instan=new consultas();
$instan->insertar($_POST['nombre'],$_POST['tarea']);
echo "<srcipt
window.location:inicio.php

</script>";
?>
