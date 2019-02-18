<?php
	session_start();
	include 'conexion.php';
	if(isset($_SESSION['user'])){
	echo '<script> window.location="index.php"; </script>';
	}
?>
<html>
<head>
	<title>INGRESA CONTRASE�A</title>
	<meta charset="utf-8">
</head>
<body>
			<center><h1 class="h1">BIENVENIDO</h1></center>
			<form method="post" action="validar.php">
<center><table>
<tr>
				<td>Usuario:<input type="text" placeholder="Ingresa usuario" name="user" autocomplete="off" required><br><br></td></tr>
<tr>				
				<td>Password:<input type="password" placeholder="Ingresa Password" name="pw" autocomplete="off" required><br><br></td></tr>
				</table>
</center>
<center><input type="submit" name="login" value="Entrar"></center>
<center><br><br><br><br><br><br><h6>Si no cuentas con usuario ingresa aqui....<a href="registro.php">REGISTRATE</a></h6></center>
			</form>
</body>
</html>