<?php
	include 'conexion.php';

	ModificarProducto($_POST['nombre'], $_POST['numero'], $_POST['correo'], $_POST['no']);

	function ModificarProducto($nombre, $numero, $correo, $no)
	{
		$sentencia="UPDATE registro SET nombre='".$nombre."', numero= '".$numero."', correo='".$correo."' WHERE no='".$no."' ";
		mysql_query($sentencia) or die (mysql_error());
	}
?>

<script type="text/javascript">
	alert("Modificado exitosamente");
	window.location.href='index.php';
</script>