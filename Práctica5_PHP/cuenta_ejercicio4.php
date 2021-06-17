<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuenta</title>
</head>
<body>
    <?  
        if (!isset($_SESSION["contador"])) {
            $_SESSION["contador"] = 1;
        }else {
            $_SESSION["contador"]++;
        } 
    ?>
    <a href= "cant_visitas_ejercicio4.php">Otra pagina</a>    
</body>
</html>    
