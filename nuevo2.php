<?php
	include 'conexion.php';

	NuevoProducto($_POST['nombre'], $_POST['numero'], $_POST['correo']);

	function NuevoProducto($nombre, $numero, $correo)
	{
		echo $sentencia="INSERT INTO registro (nombre, numero, correo) VALUES ('".$nombre."', '".$numero."', '".$correo."')";
		mysql_query($sentencia) or die (mysql_error());
	}
?>

<script type="text/javascript">
	alert("Producto Ingresado exitosamente");
	window.location.href='index.php';
</script>