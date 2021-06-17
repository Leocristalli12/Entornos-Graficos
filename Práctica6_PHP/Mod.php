<head>
    <title>Modificacion</title>
</head>
<body>
    <?php
    include ("conexion.php");

    $vNombreIni = $_POST['nombre_ini'];
    $vPaisIni = $_POST['pais_ini'];
    $vNombre = $_POST['nombre'];
    $vPais = $_POST['pais'];
    $vHabitantes = $_POST['nro_habitantes'];
    $vSuperficie = $_POST['superficie'];
    $vTieneMetro = $_POST['tieneMetro'];

    $vSql = "UPDATE Ciudades set nombre='$vNombre', pais='$vPais', nro_habitantes='$vHabitantes', superficie='$vSuperficie', tieneMetro='$vTieneMetro' where nombre='$vNombreIni' and pais='$vPaisIni'";
    mysqli_query($link,$vSql) or die (mysqli_error($link));
    echo("La ciudad fue modifica <br>");
    echo("<A href= 'Menu.html'>Volver al Menu del ABM</A>");

    mysqli_close($link);
    ?>
</body>
</html>