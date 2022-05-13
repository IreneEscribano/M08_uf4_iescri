<?php
$buscador = $_REQUEST["buscador"];
$nickname = $_REQUEST["nickname"];

include("connect.php");

$sql_usuaris = "SELECT * FROM tb_usuaris WHERE nickname LIKE '%$buscador%'";
$result_usuaris = mysqli_query($con,$sql_usuaris) or exit(mysqli_error($con).$sql_usuaris);

$sql_imatges = "SELECT DISTINCT * FROM todos WHERE nom LIKE '%$buscador%'";
$result_imatges = mysqli_query($con,$sql_imatges) or exit(mysqli_error($con).$sql_imatges);

if (mysqli_num_rows($result_usuaris) == 0 && mysqli_num_rows($result_imatges) == 0) {
    echo "La informació que busques no està.";
}
?>
<div class="row portfolio__gallery">
<?php
while($llista_usuaris = mysqli_fetch_array($result_usuaris)) {
?> 
    <div class="col-lg-4 col-md-6 col-sm-12 mix digital-marketing">
        <div class="portfolio__item">
            <div class="portfolio__item__video set-bg" data-setbg="img/portfolio/portfolio-1.jpg">
                <img style="border-radius: 400px;" src="https://cdn.dribbble.com/users/1577045/screenshots/4914645/media/028d394ffb00cb7a4b2ef9915a384fd9.png?compress=1&resize=400x300&vertical=top" width="200" height="200">
            </div>
            <div class="portfolio__item__text">
                <h4><?php echo $llista_usuaris["nickname"] ?></h4>
                <ul>
                    <li><?php echo $llista_usuaris["estat_civil"] ?></li>
                    <li><?php echo $llista_usuaris["ocupacio"] ?></li>
                </ul>
                <ul>
                    <li><?php echo $llista_usuaris["pais"] ?></li>
                    <li><?php echo $llista_usuaris["ciutat"] ?></li>
                </ul>
            </div>
        </div>
    </div>
<?php
}
while($llista_imatges = mysqli_fetch_array($result_imatges)) {
?>  
   <div class="col-lg-4 col-md-6 col-sm-6 mix digital-marketing">
        <div class="portfolio__item">
            <div class="portfolio__item__video set-bg" data-setbg="img/portfolio/portfolio-1.jpg">
                <img src=<?php echo $llista_imatges["origen"] ?> alt="">
                </div>
            <div class="portfolio__item__text">

                <h4><?php echo $llista_imatges["nom"] ?></h4>
                <p>
                    <?php echo $llista_imatges["descripcio"] ?>
                </p>
            </div>
        </div>
    </div>
<?php
}
?>
</div>
<br><br><br>