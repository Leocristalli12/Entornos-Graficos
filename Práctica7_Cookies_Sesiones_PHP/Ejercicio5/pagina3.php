<?php
$vSql = "select * FROM clientes WHERE usuario ='$nombre' ";
$vResultado = mysqli_query($link, $vSql);
$_SESSION['usuario'] = $vResultado;
$vSql = "select * FROM clientes WHERE eMail ='$clave' ";
$vResultado = mysqli_query($link, $vSql);
$_SESSION['clave'] = $vResultado;