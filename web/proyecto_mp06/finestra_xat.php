<?php
session_start();
$nickname = $_SESSION["nickname"];
$id_usuari = $_SESSION["id_usuari"];
?>
<button id="boto_xat" onclick="fnXat()"></button>
<div id="animar">
    <div id="contactes" class="contact__widget__item__text">
        <h4>Últimes converses</h4>
        <?php
        include("connect.php");
        $sql = "SELECT * FROM tb_missatges WHERE id_usuari1 = '$id_usuari' OR id_usuari2 = '$id_usuari'";
        $sql = "SELECT nickname, id_missatge, id_usuari1 AS id_me, id_usuari2 AS id_altre FROM tb_missatges INNER JOIN tb_usuaris ON tb_missatges.id_usuari2 = tb_usuaris.id_usuari WHERE id_usuari1 = '$id_usuari' 
        UNION SELECT nickname, id_missatge, id_usuari2 AS id_me, id_usuari1 AS id_altre FROM tb_missatges INNER JOIN tb_usuaris ON tb_missatges.id_usuari1 = tb_usuaris.id_usuari WHERE id_usuari2 = '$id_usuari'
        ";
        $result_usuaris = mysqli_query($con,$sql) or exit(mysqli_error($con).$sql);
        while($llista_usuaris = mysqli_fetch_array($result_usuaris)) {
        ?> 
            <span class="contacte" onclick="fnContacte('<?php echo $llista_usuaris['nickname'] ?>', <?php echo $llista_usuaris['id_missatge'] ?>)" style="cursor: pointer">
                <?php echo $llista_usuaris["nickname"] ?>
            </span>
            <br>
        <?php
        }
        ?>
    </div>
    <div id="xat_contacte"></div>
</div>
<script>
    let boto_xat = document.querySelector("#boto_xat");
    boto_xat.innerHTML = `<i class="fa fa-whatsapp"></i>`;
    let finestra_xat = document.querySelector("#animar");
    let contactes = document.querySelector("#contactes");
    let xat_contacte = document.querySelector("#xat_contacte");

    function fnContacte(nickname_contacte, id_missatge) {
        contactes.style.display = "none";
        xat_contacte.style.display = "block";

        const xhttp = new XMLHttpRequest();
        xhttp.onload = function() {
            xat_contacte.innerHTML = this.responseText;
        }
        xhttp.open("GET","xat.php?nickname_contacte="+nickname_contacte+"&id_missatge="+id_missatge);
        xhttp.send();
    }

    function enviarMissatge(id_missatge) {
        let missatge = document.querySelector("#msg");
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function() {
            document.querySelector("#xat").innerHTML = this.responseText;
            missatge.value = "";
        }
        xhttp.open("GET","nouMissatge.php?id_missatge="+id_missatge+"&missatge="+missatge.value);
        xhttp.send();
    } 
</script>