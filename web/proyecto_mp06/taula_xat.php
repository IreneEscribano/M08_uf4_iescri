<?php
session_start();
$id_usuari = $_SESSION["id_usuari"];
include("connect.php");
$sql = "SELECT * FROM tb_line_missatges INNER JOIN tb_usuaris ON tb_line_missatges.id_usuari = tb_usuaris.id_usuari WHERE id_missatge = $id_missatge ORDER BY data, hora_line_missatge";
$result_missatges = mysqli_query($con,$sql) or exit(mysqli_error($con).$sql);
while($xat = mysqli_fetch_array($result_missatges)) {
?>
    <div class="container missatge" style="<?php echo $id_usuari == $xat["id_usuari"] ? 'float: right' : 'float: left' ?>">
        <img src="https://cdn.dribbble.com/users/1577045/screenshots/4914645/media/028d394ffb00cb7a4b2ef9915a384fd9.png?compress=1&amp;resize=400x300&amp;vertical=top" alt="Avatar" width="50" height="50">
        <span class="span_usuari"><?php echo $xat["nickname"] ?></span>
        <p><?php echo $xat["missatge"] ?></p>
        <span style="color: #aaa;"><?php echo date("d/m/Y", strtotime($xat["data"])) ?></span>
        <span class="time-right"><?php echo date("H:i", strtotime($xat["hora_line_missatge"])) ?></span>
        <br>
    </div>
<?php
}
?>