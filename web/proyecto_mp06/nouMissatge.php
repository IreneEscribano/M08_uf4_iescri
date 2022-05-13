<?php
session_start();
$id_usuari = $_SESSION["id_usuari"];
$id_missatge = $_REQUEST["id_missatge"];
$missatge = $_REQUEST["missatge"];

include("connect.php");
$sql = "INSERT INTO tb_line_missatges VALUES (null, $id_usuari, $id_missatge, '$missatge', curdate(), curtime())";
$result = mysqli_query($con,$sql) or exit(mysqli_error($con).$sql);

include("taula_xat.php");
?>