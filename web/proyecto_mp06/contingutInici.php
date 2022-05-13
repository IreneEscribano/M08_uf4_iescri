<?php
$nickname = $_REQUEST["nickname"];
include("connect.php");
        $sql = "SELECT * FROM tb_usuaris";
        $result_usuaris = mysqli_query($con,$sql) or exit(mysqli_error($con).$sql);
        $res_usuaris = mysqli_fetch_array($result_usuaris);
        $ocu=$res_usuaris["ocupacio"];
        $nommm=$res_usuaris["nickname"];

switch ($_REQUEST["llista"]) {
    case "usuaris":
        $sql = "SELECT * FROM tb_usuaris";
        $result_usuaris = mysqli_query($con,$sql) or exit(mysqli_error($con).$sql);
        $res_usuaris = mysqli_fetch_array($result_usuaris);
        $ocu=$ocu;
        $nommm=$res_usuaris["nickname"];
        include("llista_usuaris.php");
        break;
    
    case "publicacions":
        $sql_tots = "SELECT * FROM todos ORDER BY data, hora"; // USAR UNION!!!
        $result_tots = mysqli_query($con,$sql_tots) or exit(mysqli_error($con).$sql_tots);

        while($res = mysqli_fetch_array($result_tots)) {
            if($res["tipus"]=="i"){ ?>
                <div class="col-lg-4 col-md-6 col-sm-6 mix digital-marketing">
                    <div class="portfolio__item">
                        <div class="portfolio__item__video set-bg" data-setbg="img/portfolio/portfolio-1.jpg">
                            <img src=<?php echo $res["origen"] ?> alt="">
                            </div>
                        <div class="portfolio__item__text">
                            <h4><?php echo $res["nom"] ?></h4>
                            <p>
                                <?php echo $res["descripcio"] ?>
                            </p>
                            <ul>
                                <li><?php echo $nommm ?></li>
                                <li><?php echo $ocu ?></li>
                            </ul>
                            <ul>
                                <li>
                                    <?php echo date("d/m/Y", strtotime($res["data"])) ?>
                                </li>
                                <li>
                                    <?php echo date("H:i", strtotime($res["hora"])) ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            <?php
            }if($res["tipus"]=="d"){ ?>
                <div class="col-lg-4 col-md-6 col-sm-6 mix digital-marketing">
                    <div class="portfolio__item">
                        <div class="portfolio__item__video set-bg" data-setbg="img/portfolio/portfolio-1.jpg">
                            <img style="border-radius: 400px;" src="https://icons-for-free.com/download-icon-file+icon-1320087274221188067_512.png" width="200" height="200">
                            </div>
                        <div class="portfolio__item__text">

                            <h4><?php echo $res["nom"] ?></h4>
                            <p>
                                <?php echo $res["descripcio"] ?>
                            </p>
                            <ul>
                                <li><?php echo $nommm ?></li>
                                <li><?php echo $ocu ?></li>
                            </ul>
                            <ul>
                                <li>
                                    <?php echo date("d/m/Y", strtotime($res["data"])) ?>
                                </li>
                                <li>
                                    <?php echo date("H:i", strtotime($res["hora"])) ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php
            }if($res["tipus"]=="v"){ // videos ?> 
                <div class="col-lg-4 col-md-6 col-sm-6 mix pub_img">   
                    <div class="portfolio__item">
                        <div class="portfolio__item__video set-bg">
                        <iframe width="460" height="215" src="<?php echo $res["origen"] ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="portfolio__item__text">
                            <h4><?php echo $res["nom"] ?></h4>
                            <span><?php echo $res["descripcio"] ?></span>
                            <br>
                            <ul>
                                <li><?php echo $nommm ?></li>
                                <li><?php echo $ocu ?></li>
                            </ul>
                            <ul>
                                <li>
                                    <?php echo date("d/m/Y", strtotime($res["data"])) ?>
                                </li>
                                <li>
                                    <?php echo date("H:i", strtotime($res["hora"])) ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php
            }if($res["tipus"]=="e"){ ?>
                <div class="col-lg-4 col-md-6 col-sm-6 mix digital-marketing">
                    <div class="portfolio__item">
                        <div class="portfolio__item__video set-bg" data-setbg="img/portfolio/portfolio-1.jpg">
                            <img src="https://cdn-icons-png.flaticon.com/512/2306/2306085.png" width="200" height="200">
                            </div>
                        <div class="portfolio__item__text">

                            <h4><?php echo $res["nom"] ?></h4>
                            <p>
                                <?php echo $res["descripcio"] ?>
                            </p>
                            <ul>
                                <li><?php echo $nommm ?></li>
                                <li><?php echo $ocu ?></li>
                            </ul>
                            <ul>
                                <li>
                                    <?php echo date("d/m/Y", strtotime($res["data"])) ?>
                                </li>
                                <li>
                                    <?php echo date("H:i", strtotime($res["hora"])) ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php
                }
            }
        break;
}
?>