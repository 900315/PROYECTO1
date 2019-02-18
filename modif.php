<?php
   include 'conexion.php';

  $consulta=ConsultarProducto($_GET['no']);

  function ConsultarProducto($nombre)
  {
    $sentencia="SELECT * FROM registro WHERE no='".$nombre."' ";
    $resultado=mysql_query($sentencia) or die (mysql_error());
    $filas=mysql_fetch_assoc($resultado);
    return [
      $filas['nombre'],
      $filas['numero'],
      $filas['correo']
    ];

  }


?>
<html>
<head>
<title>Modificar</title>
</head>
<body>
<div class="todo">
  
  <div id="cabecera">
  	  </div>
    <div id="contenido">
  	<div style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
  		<span> <h1>Modificar</h1> </span>
  		<br>
	  <form action="modif2.php" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">
      <input type="hidden" name="no" value="<?php echo $_GET['no']?> ">
  		<label>Nombre:</label>
  		<input type="text" id="nombre" name="nombre"; value="<?php echo $consulta[0] ?>" ><br>
  		
  		<label>Numero: </label>
  		<input type="text" id="numero" name="numero" value="<?php echo $consulta[1] ?>"><br>
  		
  		<label>Correo </label>
  		<input type="email"" id="correo" name="correo" value="<?php echo $consulta[2] ?>"><br><br>
  		
  		<br>
  		<button type="submit" class="btn btn-success">Guardar</button>
     </form>
  	</div>
  	
  </div>
  
	<div id="footer">
  		</div>

</div>


</body>
</html>