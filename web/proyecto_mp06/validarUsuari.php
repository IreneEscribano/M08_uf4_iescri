<?php
include("connect.php");
session_start();
$nickname = $_REQUEST["usuari"];
$passwd = $_REQUEST["contrasenya"];
$sql = "SELECT * FROM tb_usuaris WHERE nickname = '$nickname'";
$result = mysqli_query($con,$sql) or exit(mysqli_error($con).$sql);
$reg = mysqli_fetch_array($result);

if ($reg["passwd"] == $passwd) {
    $_SESSION['nickname'] = $nickname;
    $_SESSION['id_usuari'] = $reg['id_usuari'];
    echo true;
} else {
    echo "Dades incorrectes";
}
?>