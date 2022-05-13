<?php
session_start();

$id_usuari = $_SESSION["id_usuari"];
$nom = $_REQUEST["nom"];
$descripcio = $_REQUEST["descripcio"];
$ubicacio = $_REQUEST["ubicacio"];
$adult = $_REQUEST["adult"];

if($nom == "" || $descripcio == "" || $ubicacio == "") {
    echo "Has d'omplir tots els camps";
} else {
    include("connect.php");
    $sql = "INSERT INTO tb_imatges (id_artista, nom, descripcio, data, hora, ubicacio, adult) VALUES ($id_usuari, '$nom', '$descripcio', curdate(), curtime(), '$ubicacio', $adult)";
    $result = mysqli_query($con,$sql) or exit(mysqli_error($con).$sql);
    echo !mysqli_error($con) ? "Imatge pujada" : "Error al pujar la imatge";
}
?>