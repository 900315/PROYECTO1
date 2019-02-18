<?php
	include 'conexion.php';

	Nuevo($_POST['user'], $_POST['pw']);

	function Nuevo($user, $pw)
	{
		echo $sentencia="INSERT INTO admin (user,  pw) VALUES ('".$user."', '".$pw."')";
		mysql_query($sentencia) or die (mysql_error());
	}
?>

<script type="text/javascript">
	alert("Producto Ingresado exitosamente");
window.location.href='home.php';
	
</script>