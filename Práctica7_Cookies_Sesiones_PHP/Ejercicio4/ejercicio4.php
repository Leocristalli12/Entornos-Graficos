<?php
if(isset($_POST["tipotitular"]))
{
$estilo = $_POST["tipotitular"];
setcookie("titular", $titular, time());
}
else{
if (isset($_COOKIE["titular"])){
$titular = $_COOKIE["titular"];
}
}
?>

<html>
<head>
<title>Periodico</title>
</head>
<body>
Este es un periodico por favor elija el tipo de titular
<p>
<form action="ejercicio4.php" method="post" >
  <p>
    Tipo de titular:<br>

    <input type="radio" name="tipotitular" value="noticiapolitica "> Noticia Politica<br>

    <input type="radio" name="tipotitular" value="noticiaeconomica"> Noticia Economica<br>

    <input type="radio" name="tipotitular" value="noticiadeportiva"> Noticia Deportiva

  </p>

  <p><input type="submit" value="Enviar datos"></p>
</form>
<a href="destruircookie.php">click aqui para borrar cookie creada </a>
</body>
</html>