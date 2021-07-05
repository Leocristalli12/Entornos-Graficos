<?
setcookie("usuario", $visitas , time()+ 3600*24*365);
$_COOKIE['usuario']= $_POST['usu'];
?>