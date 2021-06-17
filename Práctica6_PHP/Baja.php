<html>
    <head>
        <title>Baja</title>
    </head>
    <body>
        <?php
            include ("conexion.php");
            $vCiudad = $_POST ['nombre'];
            $vPais = $_POST ['pais'];
            $vSql = "SELECT * FROM Ciudades c WHERE c.nombre='$vCiudad' and c.pais='$vPais'";
            $vResultado = mysqli_query($link, $vSql);
            if(mysqli_num_rows($vResultado) == 0){
                echo ("Usuario Inexistente...!!! <br>");
                echo ("<A href='FormBajaIni.html'>Continuar</A>");
            }
            else {
                $vSql= "DELETE FROM Ciudades c WHERE c.nombre='$vCiudad' and c.pais='$vPais'";
                mysqli_query($link, $vSql);
                echo("El Usuario fue Borrado<br>");
                echo("<A href='Menu.html'>Volver al Menu del ABM</A>");
            }

            mysqli_free_result($vResultado);
            mysqli_close($link);
        ?>
    </body>
</html>