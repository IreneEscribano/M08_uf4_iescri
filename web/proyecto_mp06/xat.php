<?php
session_start();
$nickname = $_SESSION["nickname"];
$nickname_contacte = $_REQUEST["nickname_contacte"];
$id_missatge = $_REQUEST["id_missatge"];
?>
<div id="info_xat">
    <button onclick="contactes.style.display = 'block'; xat_contacte.style.display = 'none';"><i class="fa fa-arrow-left"></i></button>
    &nbsp;
    <b><?php echo $nickname_contacte ?></b>
</div>
<div>
<div id="xat">
    <?php include("taula_xat.php") ?>
</div>
<div id="controls_xat" class="breadcrumb__text">
    <div class="footer__option__item" style="margin: 0 auto; background-color: #100028;">
        <form id="form_missatge" action="javascript:void(0);">
            <textarea id="msg" cols="20" placeholder="Envia un missatge..." onkeydown="event.key == 'Enter' && event.target.value != '' ? enviarMissatge(<?php echo $id_missatge ?>) : ''"></textarea>
            <button type="button" id="send" style="right: unset" onclick="document.querySelector('#msg').value != '' ? enviarMissatge(<?php echo $id_missatge ?>) : ''"><i class="fa fa-send"></i></button>
        </form>
    </div>
</div>
<div id="marge"></div>
</div>