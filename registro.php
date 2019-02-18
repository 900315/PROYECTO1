<?php
 include 'conexion.php';
?>
<title>Alta</title>
<body>
   <center>	<div>
  		<span> <h1>Alta de Nuevo</h1> </span>
  		<br>
	  <form action="REGISTRO2.php" method="POST">
  		<label>Nombre: </label>
  		<input type="text" placeholder="Ingresa tu usuario" id="user" name="user"><br>
  		
  		<label>Password: </label>
  		<input type="password" placeholder="Ingresa tu password" id="pw" name="pw" ><br>
  		  		  		
  		<br>
  		<button type="submit">Guardar</button>
     </form>
  	</div>
  	
  
<center>
</body>
</html>