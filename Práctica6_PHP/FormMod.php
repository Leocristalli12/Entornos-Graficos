<head>    
<title>Modificacion</title>
</head>
<body>
    <?php
        include ("conexion.php");
        $vCiudad = $_POST['ciudad'];
        $vPais = $_POST['pais'];

        $vSql = "SELECT * FROM Ciudades c WHERE c.nombre='$vCiudad' and c.pais='$vPais'";
        $vResultado = mysqli_query($link, $vSql) or die (mysqli_error($link));;
        $fila = mysqli_fetch_array($vResultado);
        if(mysqli_num_rows($vResultado) == 0) {
            echo ("Ciudad Inexistente!!! <br>");
            echo ("<A href='FormModiIni.html'>Continuar</A>");
        }
        else {
    ?>
    clientID=" <?php echo $clientID ?>
        <FORM action="Mod.php?nombre_ini=<?php echo $vCiudad ?>?pais_ini=<?php echo $vPais ?>" method="POST" name="FormMod">
            <table width="356">
                <tr>
                    <td width="103"> Nombre: </td>
                    <td width="243"> 
                        <input type="text" name="nombre" value="<?php echo($fila['nombre']); ?>"> 
                    </td>
                </tr>
                <tr>
                    <td width="103"> País al que pertenece: </td>
                    <td width="243"> 
                        <input type="text" name="pais" size="20" maxlength="20" value="<?php echo($fila['pais']); ?>">
                    </td>
                </tr>
                <tr>
                    <td width="103"> Cantidad de Habitantes: </td>
                    <td width="243"> 
                        <input type="text" name="nro_habitantes" size="20" maxlength="20" value="<?php echo($fila['nro_habitantes']); ?>">
                    </td>
                </tr>
                <tr>
                    <td width="103"> Superficie: </td>
                    <td width="243"> 
                        <input type="TEXT" name="superficie" size="20" maxlength="40" value="<?php echo($fila['superficie']); ?>">
                    </td>
                </tr>
                <tr>
                    <p>Tiene metro ? </p>
                    <input type="radio" id="si" name="tieneMetro" value="si">
                    <label for="si">Si</label><br>
                    <input type="radio" id="no" name="tieneMetro" value="no">
                    <label for="no">No</label>
                    <br>   
                </tr>
                <tr>
                    <td colspan="2" align="center">    
                        <input type="SUBMIT" name="Submit" value="Modificar">
                    </td>
                </tr>
            </table>
        </FORM>
    <?php
        mysqli_free_result($vResultado);
        mysqli_close($link);
    ?>  
</body>