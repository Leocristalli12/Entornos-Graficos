<?php
$fecha=date("d-m-Y");
$hora= date("H :i:s");
$destino=$_POST['email']; 
$nombre_amigo= $_POST['nombre'];
$asunto="Recomendacion de nuestra pagina";

$comentario= "
\n
    Hola $nombre_amigo te invitamos a que conozocas <a href='www.lapaginaweb.com'> nuestra pagina web  </a>
\n
";
mail($destino,$asunto,$comentario,$desde);
echo "Gracias por recomendar nuestro sitio !";
?>