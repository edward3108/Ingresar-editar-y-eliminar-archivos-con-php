<?php
class con{

public static function conectar(){

$host="localhost";
$usuario="root";
$password="";
$db="libreria";
$conexion=mysql_connect($host,$usuario,$password) or die ("no se conecto");
mysql_query("SET NAME 'utf8'");
$sel=mysql_select_db($db) or die ("no se encontro");

return $conexion;
}
}
//fin de la clase conexion...........................................................................
class consultas{
  public $visitas;
public function _construntor()
{
	$this->visitas=array();
}	

public function seleccion()
{	
	$sql="SELECT *FROM MENSAJES ORDER BY ID";
	$ejecutar=mysql_query($sql,con::conectar());
	while ($reg=mysql_fetch_assoc($ejecutar)) {
		$this->visitas[]=$reg;
		
	}
	return $this->visitas;
}
//fin de la funcion seleccion...........................................................
public function insertar($nom,$com)
{

	$sql="INSERT INTO MENSAJES VALUES(null,'$nom','$com')";
	$ejecutar=mysql_query($sql,con::conectar());
	echo "<script>
		window.location='inicio.php';

	</script>";
}
//fin de la funcion insertar.............................................................
public function buscar($id)
{
	$sql="SELECT *FROM MENSAJES WHERE ID=$id";
	$ejecutar=mysql_query($sql,con::conectar());
	while($reg=mysql_fetch_assoc($ejecutar))
	{
		$this->visitas[]=$reg;

	}
	return $this->visitas;
}
//fin de la funcion buscar................................................................
public function editar($nom,$com,$id)
{
	$sql="UPDATE MENSAJES SET NOMBRE='$nom', COMENTARIOS='$com' WHERE ID=$id";
	$ejecutar=mysql_query($sql,con::conectar());

	echo "<script>
		window.location='inicio.php';

	</script>";
}
//fin de la funcion editar..................................................................
public function eliminar($id)
{

	$sql="DELETE FROM MENSAJES WHERE ID=$id";
	$ejecutar=mysql_query($sql,con::conectar());

	echo "<script>
		window.location='inicio.php';

	</script>";

}
}




?>
