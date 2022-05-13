<?php
switch ($_REQUEST["index"]) {
    case 0:
            include("connect.php");
            $sql = "SELECT * FROM tb_imatges";
            $result = mysqli_query($con,$sql) or exit(mysqli_error($con).$sql);
            while($imatge = mysqli_fetch_array($result)) {
            ?>
                <div class="col-lg-4 col-md-6 col-sm-6 mix pub_img">   
                    <div class="portfolio__item">
                        <div class="portfolio__item__video set-bg">
                            <img src="<?php echo $imatge["origen_imatge"] ?>" onclick="obrirImatge(this)">
                        </div>
                        <div class="portfolio__item__text">
                            <h4>VIP Auto Tires & Service</h4>
                            <span>pub_doc</span>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        <?php
        break;
    case 1:
        break;
    case 2:
        ?>
        <ol class="gradient-list">
            <?php
            include("connect.php");
            $sql = "SELECT * FROM tb_publicacions INNER JOIN tb_artistas ON tb_publicacions.id_artista = tb_artistas.id_artista INNER JOIN tb_usuaris ON tb_artistas.id_usuari = tb_usuaris.id_usuari ORDER BY data_publicacio DESC, hora_publicacio DESC";
            $result = mysqli_query($con,$sql) or exit(mysqli_error($con).$sql);

            while($publi = mysqli_fetch_array($result)) {
                $data = date_create($publi["data_publicacio"]);
            ?>
                <li>
                    <b><?php echo $publi["nickname"] ?></b>
                    <p class="info_dreta">
                    <span>
                            <i class="fa-solid fa-heart has-text-danger"></i>
                            <br>
                            <?php echo $publi["likes"] ?>
                        </span>
                        <span>
                            <i class="fa-solid fa-comment"></i>
                            <br>
                            <?php echo $publi["num_comentaris"] ?>
                        </span>
                        <span>
                            <i class="fa-solid fa-download has-text-info"></i>
                            <br>
                            <?php echo $publi["num_descarregas"] ?>
                        </span> 
                        <span>
                            <i class="fa-solid fa-box-archive"></i>
                            <br>
                            <?php echo $publi["num_arxivats"] ?>
                        </span>
                    </p>
                    <h1><?php echo $publi["nom_publicacio"] ?></h1>
                    <p>
                        <?php echo $publi["descripcio_publicacio"] ?>
                    </p>
                    <br>
                    <p class="info_esquerra">
                        <span>
                            <i class="fa-solid fa-heart has-text-danger"></i>
                            <br>
                            <?php echo $publi["likes"] ?>
                        </span>
                        <span>
                            <i class="fa-solid fa-comment"></i>
                            <br>
                            <?php echo $publi["num_comentaris"] ?>
                        </span>
                        <span>
                            <i class="fa-solid fa-download has-text-info"></i>
                            <br>
                            <?php echo $publi["num_descarregas"] ?>
                        </span> 
                        <span>
                            <i class="fa-solid fa-box-archive"></i>
                            <br>
                            <?php echo $publi["num_arxivats"] ?>
                        </span>
                    </p>
                    <p class="info_centre">
                        <?php echo $publi["especialitat"] ?>
                    </p>
                    <p class="info_dreta">
                        <br>
                        <?php echo date_format($data, "d/m/Y") ?>
                        <?php echo $publi["hora_publicacio"] ?>
                    </p>
                </li>
            <?php
            }
            ?>
        </ol>
        <?php
        break;
    case 3:
        ?>
        <ol class="gradient-list">
            <?php
            include("connect.php");
            $sql = "SELECT * FROM tb_publicacions INNER JOIN tb_artistas ON tb_publicacions.id_artista = tb_artistas.id_artista INNER JOIN tb_usuaris ON tb_artistas.id_usuari = tb_usuaris.id_usuari ORDER BY data_publicacio DESC, hora_publicacio DESC";
            $result = mysqli_query($con,$sql) or exit(mysqli_error($con).$sql);

            while($publi = mysqli_fetch_array($result)) {
                $data = date_create($publi["data_publicacio"]);
            ?>
                <li>
                    <b><?php echo $publi["nickname"] ?></b>
                    <h1><?php echo $publi["nom_publicacio"] ?></h1>
                    <p>
                        <?php echo $publi["descripcio_publicacio"] ?>
                    </p>
                    <br>
                    <p class="info_esquerra">
                        <span>
                            <i class="fa-solid fa-heart has-text-danger"></i>
                            <br>
                            <?php echo $publi["likes"] ?>
                        </span>
                        <span>
                            <i class="fa-solid fa-comment"></i>
                            <br>
                            <?php echo $publi["num_comentaris"] ?>
                        </span>
                        <span>
                            <i class="fa-solid fa-download has-text-info"></i>
                            <br>
                            <?php echo $publi["num_descarregas"] ?>
                        </span> 
                        <span>
                            <i class="fa-solid fa-box-archive"></i>
                            <br>
                            <?php echo $publi["num_arxivats"] ?>
                        </span>
                    </p>
                    <p class="info_centre">
                        <?php echo $publi["especialitat"] ?>
                    </p>
                    <p class="info_dreta">
                        <br>
                        <?php echo date_format($data, "d/m/Y") ?>
                        <?php echo $publi["hora_publicacio"] ?>
                    </p>
                </li>
            <?php
            }
            ?>
        </ol>
        <?php
        break;
    case 4:
            include("connect.php");
            $sql_tots = "SELECT * FROM todos ORDER BY data, hora"; // USAR UNION!!!
            $result_tots = mysqli_query($con,$sql_tots) or exit(mysqli_error($con).$sql_tots);

            while($res = mysqli_fetch_array($result_tots)) {
                if($res["tipus"]=="i"){ ?>
                    <div class="col-lg-4 col-md-6 col-sm-6 mix pub_img">   
                    <div class="portfolio__item" style="background-color:white;">
                        <div class="portfolio__item__video set-bg">
                            <img max-height:220px" src="<?php echo $res["origen"] ?>" onclick="obrirImatge(this)">
                        </div>
                        <div class="portfolio__item__text">
                            <h4><?php echo $res["nom"] ?></h4>
                            <div class="container"> 
                                <div class="row">
                                    <div class="col-3">
                                        <span><i class="fa-solid fa-heart" style=""></i><?php echo $res["likes"] ?></span>
                                    </div>
                                    <div class="col-3">
                                        <span><i class="fa-solid fa-comment"></i><?php echo $res["num_comentaris"] ?></span>
                                    </div>
                                    <div class="col-3">
                                        <span><i class="fa-solid fa-folder-plus"></i><?php echo $res["num_arxivats"] ?></span>
                                    </div>
                                    <div class="col-3">
                                        <span><i class="fa-solid fa-circle-down"></i><?php echo $res["num_descarregas"] ?></span>
                                    </div>
                                </div>
                            </div>
                            <span><?php echo $res["num_descarregas"] ?></span>
                        </div>
                    </div>
                    
                </div>
                <?php
                }if($res["tipus"]=="d"){ ?>
                    <div class="col-lg-4 col-md-6 col-sm-6 mix pub_img">   
                    <div class="portfolio__item">
                        <div class="portfolio__item__video set-bg">
                        </div>
                        <div class="portfolio__item__text">
                            <h4><?php echo $res["nom"] ?></h4>
                            <span>doc</span>
                        </div>
                    </div>
                    
                </div>
                    <?php
                }if($res["tipus"]=="v"){ // videos ?> 
                    <div class="col-lg-4 col-md-6 col-sm-6 mix pub_img">   
                    <div class="portfolio__item">
                        <div class="portfolio__item__video set-bg">
                        <iframe width="560" height="315" src="<?php echo $res["origen"] ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="portfolio__item__text">
                            <h4><?php echo $res["nom"] ?></h4>
                            <span>video</span>
                        </div>
                    </div>
                    </div>
                    <?php
                }if($res["tipus"]=="e"){ ?>
                    <div class="col-lg-4 col-md-6 col-sm-6 mix pub_img">   
                    <div class="portfolio__item">
                        <div class="portfolio__item__video set-bg">
                        </div>
                        <div class="portfolio__item__text">
                            <h4><?php echo $res["nom"] ?></h4>
                            <span>exe</span>
                        </div>
                    </div>
                    </div>
                    <?php
                    
    
                }
            }
            
            ?>
        <?php
        break;
}
?>