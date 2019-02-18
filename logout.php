<?php
session_start();
session_destroy();
echo 'Cerraste sesión';
echo '<script> window.location="home.php"; </script>';
?>
<html>
<head>
	<title>Saliendo...</title>
	<meta charset="utf-8">
</head>
<body>
<script language="javascript">location.href = "home.php";</script>
</body>
</html>