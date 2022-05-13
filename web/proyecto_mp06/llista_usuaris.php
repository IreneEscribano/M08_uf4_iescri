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