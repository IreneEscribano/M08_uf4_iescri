<?php
session_start();

$id_usuari = $_SESSION["id_usuari"];
$nom = $_REQUEST["nom"];
$descripcio = $_REQUEST["descripcio"];
$ubicacio = $_REQUEST["ubicacio"];
$tipus_exe = $_REQUEST["tipus_exe"];
$num_arxius = $_REQUEST["num_arxius"];

if($nom == "" || $descripcio == "" || $ubicacio == "" || $tipus_exe == "" || $num_arxius == "") {
    echo "Has d'omplir tots els camps";
} else {
    include("connect.php");
    $sql = "INSERT INTO tb_exes (id_artista, nom, descripcio, data, hora, ubicacio, tipus_exe, num_arxius) VALUES ($id_usuari, '$nom', '$descripcio', curdate(), curtime(), '$ubicacio','$tipus_exe', $num_arxius)";
    $result = mysqli_query($con,$sql) or exit(mysqli_error($con).$sql);
    echo !mysqli_error($con) ? "Executable pujat" : "Error al pujar l'executable";
}
?>