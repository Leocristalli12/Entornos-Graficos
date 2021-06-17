<?php 
$destinatario = "leogercristalli@gmail.com";
$asunto = "Ejercicio_1";
$cuerpo = ' 
<html>
<head>
    <title>Envio de mail</title> 
</head> 
<body> 
<h1>Hola!</h1> 
<p> <b>Ejercicio 1</b>. xxxxxxxxxxxxxxxxxxxxxxxxxxxx</p> 
</body> 
</html> ';
mail($destinatario,$asunto,$cuerpo);
?>