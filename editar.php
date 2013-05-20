<?php
//error_reporting(E_ALL ^ E_NOTICE);
require_once("funciones.php");
$instancia=new consultas();

if (isset($_POST['grabar']) and $_POST['grabar']="si")
{
  $instancia->editar($_POST['nombre'],$_POST['tarea'],$_POST['id']);

	exit();
}
$reg=$instancia->buscar($_GET["id"]);
?>
<html  xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
<meta charset="utf-8"/>

<title>Editar</title>
<script type="text/javascript" src="java/validacion.js"></script>
	

</head>
<body>

<form name="form1" action="editar.php" method="post"  id="mensajeria" enctype="aplication/x-www-form-urlencoded">
<strong>Nombre</strong><br/>
<input type="text" id="nombre" name="nombre" value="<?php echo $reg[0]['NOMBRE'];?>"/><br/>
<strong>Mensaje</strong><br/>
<textarea id="tarea" name="tarea"><?php echo $reg[0]['COMENTARIOS'];?></textarea><br/>

<input type="hidden" name="grabar" value="si">
<input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
<input type="button" id="editar" name="editar" value="Editar" onClick="validar()">

</form>
<hr width="100%">
<center>
<table colspam="8" >
 
     
 </table>
</center>


</body>

</html>
