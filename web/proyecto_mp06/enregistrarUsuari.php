<?php
include("connect.php");
session_start();
$nom_usuari = $_REQUEST["nom_usuari"];
$nickname = $_REQUEST["usuari"];
$passwd = $_REQUEST["contrasenya"];
$sql = "SELECT * FROM tb_usuaris";
$result = mysqli_query($con,$sql) or exit(mysqli_error($con).$sql);
$reg = mysqli_fetch_array($result);

if ($reg["nickname"] != $nickname) {
    $sql = "INSERT INTO tb_usuaris (id_usuari, nom_usuari, nickname, passwd) VALUES (null, '$nom_usuari','$nickname','$passwd')";
    $result = mysqli_query($con,$sql) or exit(mysqli_error($con).$sql);

    $sql = "SELECT * FROM tb_usuaris WHERE nickname = '$nickname'";
    $result = mysqli_query($con,$sql) or exit(mysqli_error($con).$sql);
    $reg2 = mysqli_fetch_array($result);

    $_SESSION['nickname'] = $nickname;
    $_SESSION["id_usuari"] = $reg2["id_usuari"];
    echo true;
} else {
    echo "Usuari ja utilitzat";
}
?>