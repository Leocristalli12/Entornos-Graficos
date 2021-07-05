<?php
session_start();
?>
<html>
<head>
<title>Problema</title>
</head>
<body>
<?php
include ("conexion.inc");
$nombre= $_POST['nombre'];
$clave= $_POST['clave'];
$_SESSION['usuario']= $nombre;
$_SESSION['clave']= $clave;
?>
<a href="pagina3.php">Ingresar a pagina principal</a>;
</body>
</html>