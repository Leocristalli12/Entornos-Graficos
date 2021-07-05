<?php
if (!isset($_COOKIE['usuario']))
{
    echo "no hay usuario registrado anteriormente ";
    setcookie("usuario", $usuario, time());
}
else
{
    echo "ultimo usuario registrado es: " .$_COOKIE['usuario'];
    $usuario = $_POST['usu'];
}
?>

<html>
<head>
<title>Formulario</title>
</head>
<body>
<form action= "ejercicio3.php" method="post">
<p>Ingrese el nombre del Usuario:</p>
<input type="text" name="usu">
<br>
<input type="submit" value="ingresar">
</form>
</body>
</html>