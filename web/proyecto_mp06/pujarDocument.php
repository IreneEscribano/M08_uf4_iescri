<?php
session_start();

$id_usuari = $_SESSION["id_usuari"];
$nom = $_REQUEST["nom"];
$descripcio = $_REQUEST["descripcio"];
$ubicacio = $_REQUEST["ubicacio"];
$tipus_document = $_REQUEST["tipus_document"];
$paginas = $_REQUEST["paginas"];

if($nom == "" || $descripcio == "" || $ubicacio == "" || $tipus_document == "" || $paginas == "") {
    echo "Has d'omplir tots els camps";
} else {
    include("connect.php");
    $sql = "INSERT INTO tb_documents (id_artista, nom, descripcio, data, hora, ubicacio, tipus_document, paginas) VALUES ($id_usuari, '$nom', '$descripcio', curdate(), curtime(), '$ubicacio','$tipus_document', $paginas)";
    $result = mysqli_query($con,$sql) or exit(mysqli_error($con).$sql);
    echo !mysqli_error($con) ? "Document pujat" : "Error al pujar el document";
}
?>