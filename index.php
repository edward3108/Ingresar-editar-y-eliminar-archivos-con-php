<?php
//error_reporting(E_ALL ^ E_NOTICE);
require_once("funciones.php");


?>
<html  xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
<meta charset="utf-8"/>

<title>Mensajeria</title>
<script type="text/javascript" src="java/validacion.js"></script>
  

</head>
<body>

<form name="form1" action="insertar.php" method="post"  id="mensajeria" enctype="aplication/x-www-form-urlencoded">
<strong>Nombre</strong><br/>
<input type="text" id="nombre" name="nombre"/><br/>
<strong>Mensaje</strong><br/>
<textarea id="tarea" name="tarea"></textarea><br/>

<input type="button" id="boton_escribir" name="boton_escribir" value="Escribir" onClick="validar()">
</form>
<hr width="100%">
<center>
<table colspan="8" >
 
     
            <?php

$instancia=new consultas();
$reg=$instancia->seleccion();
echo"<tr style='background-color: #883; color: #FFF; font-weight: bold;' >
         <td>
           ID
        </td> 
    
        <td>
          NOMBRE
        </td>
         <td >
           COMENTARIOS
        </td>
        <td>
         
        </td>
         <td>
          
        </td>
    </tr>";
for ($a=0;$a<Count($reg);$a++) {

?>         
         <tr style='background-color: #eee; color: #000; font-weight: bold;' >
         <td>
           <?php echo $reg[$a]["ID"];?>
        </td> 
  
        <td>
           <?php echo $reg[$a]["NOMBRE"];?>
        </td>
         <td>
           <?php echo $reg[$a]["COMENTARIOS"];?>
        </td>
        <td>
           <a href="editar.php?id=<?php echo $reg[$a]["ID"];?>"><img src="img/editar.jpg" width="20" title="Editar"></a>
        </td>
         <td>
           <a href="javascript:void(0);" onClick="eliminar('eliminar.php?id=<?php echo $reg[$a]['ID'];?>')"><img src="img/eliminar.jpg"  width="20" title="Eliminar"></a>
        </td>
    </tr>


<?php


}

?>

    </table>
</center>


</body>

</html>
