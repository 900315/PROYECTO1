<html>
<head>
<title>CAPITAL HUMANO</title>
</head>
<body>
<H1> <center>REGISTROS</center></h1>

  <div>
<center>
  	<table border="0">
  		<thead>
  			<th>NO</th>
  			<th>NOMBRE</th>
  			<th>NUMERO</th>
  			<th>CORREO</th>
  			<th> <a href="nuevo.php"> <button type="button">Nuevo</button> </a> </th>
  		</thead>
  		
  		
  		<?php
         include 'conexion.php';
      $sentencia="SELECT * FROM registro";
      $resultado=mysql_query($sentencia);
      while($filas=mysql_fetch_assoc($resultado))
      {
        echo "<tr>";
          echo "<td>"; echo $filas['no']; echo "</td>";
          echo "<td>"; echo $filas['nombre']; echo "</td>";
          echo "<td>"; echo $filas['numero']; echo "</td>";
          echo "<td>"; echo $filas['correo']; echo "</td>";
          echo "<td>  <a href='modif.php?no=".$filas['no']."'> <button type='button' >Modificar</button> </a> </td>";
          echo "<td> <a href='eliminar.php?no=".$filas['no']."''><button type='button' >Eliminar</button></a> </td>";
        echo "</tr>";
      }

      ?>
	  </table>
</center>
  </div>
	<br><br><br><center><a href="logout.php"><button>Salir</button></a> </center>
    <center><h3><a href="reporte.php"><button>Reporte</button></a></h3></center>
  </body>
</html>

