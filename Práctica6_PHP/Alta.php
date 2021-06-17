<html>
<head>
    <title>Alta Ciudad</title>
</head>
<body>
    <?php
    include("conexion.php");
    $vCiudad = $_POST['ciudad'];
    $vPais = $_POST['pais'];
    $vHabitantes = $_POST['habitantes'];
    $vSup = $_POST['superficie'];
    $vTieneMetro = $_POST['tieneMetro'];

    $vSql = "select * from Ciudades c where c.nombre=$vCiudad and c.pais=$vPais";
    $vResultado = mysqli_query($link, $vSql) or die (mysqli_error($link));;
    $vCantCiu = mysqli_fetch_assoc($vResultado);

    if ($vCantCiu != null){
        echo ("La Ciudad ya Existe<br>");
        echo ("<A href='Menu.html'>VOLVER AL ABM</A>");
    }
    else {
        $vSql = "INSERT INTO Ciudades (nombre, pais, nro_habitantes, superficie, tieneMetro) values ('$vCiudad', '$vPais', '$vHabitantes', '$vSup', '$vTieneMetro') ";
        mysqli_query($link, $vSql) or die (mysqli_error($link));
        echo("La ciudad fue Registrada, Pronto recibirás un email, confirmandote la actualizaciòn a nuestra pagina<br>");
        echo ("<A href='Menu.html'>VOLVER AL MENU</A>");
        mysqli_free_result($vResultado);
    }
    mysqli_close($link);
    ?>
</body>
</html>