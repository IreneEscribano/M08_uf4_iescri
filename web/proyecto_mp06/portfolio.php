<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Videograph Template">
    <meta name="keywords" content="Videograph, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Videograph | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="css/user.css" type="text/css">
</head>

<body>

    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <?php 
    session_start();
        $ses_nickname = $_SESSION["nickname"];
        $ses_id = $_SESSION["id_usuari"];
            
    ?>

    <!-- Header Section Begin -->
    <header class="header" style="border:none;">
    <?php include ("menu.php"); ?>

    </header>
    <!-- Header End -->

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option spad set-bg" data-setbg="img/fondo_m06.png">
        <!-- AAA Cambiar img por img tema de usuario-->
            <section class="about spad" style="background-image: url(https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/9034cf6c-5a8a-4ba9-b004-b6129ee77df4/ded86gm-74eb2832-6e07-47b5-877c-6ce6f1bf979f.jpg/v1/fill/w_1024,h_683,q_75,strp/aishiteru_by_gokkasan_ded86gm-fullview.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9NjgzIiwicGF0aCI6IlwvZlwvOTAzNGNmNmMtNWE4YS00YmE5LWIwMDQtYjYxMjllZTc3ZGY0XC9kZWQ4NmdtLTc0ZWIyODMyLTZlMDctNDdiNS04NzdjLTZjZTZmMWJmOTc5Zi5qcGciLCJ3aWR0aCI6Ijw9MTAyNCJ9XV0sImF1ZCI6WyJ1cm46c2VydmljZTppbWFnZS5vcGVyYXRpb25zIl19.FRtV2QL2o1WsMJfDPuVh5uykhzATf7j6cJFDwb4TY3I);">
                <div class="ab_container" style="text-align: center;">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="about__pic">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <!-- AAA Cambiar img por img foto de perfil de usuario-->
                                                <img class="about__pic__item set-bg"  src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/9034cf6c-5a8a-4ba9-b004-b6129ee77df4/demmm60-4f442751-ab53-4cad-875c-ff48cf5297df.jpg/v1/fill/w_1024,h_1024,q_75,strp/denji___chainsaw_man_by_gokkasan_demmm60-fullview.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9MTAyNCIsInBhdGgiOiJcL2ZcLzkwMzRjZjZjLTVhOGEtNGJhOS1iMDA0LWI2MTI5ZWU3N2RmNFwvZGVtbW02MC00ZjQ0Mjc1MS1hYjUzLTRjYWQtODc1Yy1mZjQ4Y2Y1Mjk3ZGYuanBnIiwid2lkdGgiOiI8PTEwMjQifV1dLCJhdWQiOlsidXJuOnNlcnZpY2U6aW1hZ2Uub3BlcmF0aW9ucyJdfQ.OK4jFN-n-1bILt9-yjMLw5Qdn5tSEYJAlSgh7AhcA2c" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <?php
                                include("connect.php");
                                $sql_tots = "SELECT * FROM tb_artistas INNER JOIN tb_usuaris ON tb_usuaris.id_usuari = tb_artistas.id_usuari WHERE id_artista = $ses_id";
                                $result_tots = mysqli_query($con,$sql_tots) or exit(mysqli_error($con).$sql_tots);
                                $res = mysqli_fetch_array($result_tots);
                            ?>
                            <div class="about__text">
                                <div class="section-title">
                                    <!--AAA Cambiar especialidad por la del usuario-->
                                    <span class="especialitat"> <?php echo $res["especialitat"] ?></span>
                                    <!--AAA Cambiar nickname por el del usuario-->
                                    <h2 class="nickname"><?php echo $res["nickname"]?></h2>
                                </div>
                                <div class="row desc">
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="services__item">
                                    <!--AAA Cambiar opcupacio por la del usuario-->

                                            <h4 class="ocupacio" style="max-width:250px; text-align:center;"><?php echo $res["ocupacio"]?></h4>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="services__item">
                                    <!--AAA Cambiar disponibilidad por el del artista-->
                                            <h4 class="disponibilitat"> <?php echo $res["disponibilitat"]?></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="about__text__desc">
                                    <!--AAA Cambiar por descripcion del artista-->
                                    <p class="descripcio" style="color: white;"><?php echo $res["descripcio"]?></p>
                                    <div class="row numeros">
                                        <div class="col-lg-4 col-md-6 col-sm-6 aaa">
                                            <div class="counter__item">
                                                <div class="counter__item__text">
                                                    <i class="fa-solid fa-photo-film iconos"></i>
                                                    <!--AAA Cambiar por total de publicaciones-->
                                                    <h2 class="counter_num">230</h2>
                                                    <p>PUBLICACIONS</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6">
                                            <div class="counter__item">
                                                <div class="counter__item__text">
                                                    <!-- AAA Cambiar por total de seguidores-->
                                                    <i class="fa-solid fa-user iconos"></i>
                                                    <h2 class="counter_num">230</h2>
                                                    <p>SEGUIDORS</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6">
                                            <div class="counter__item third__item">
                                                <div class="counter__item__text">
                                                    <i class="fa-solid fa-tree-city iconos"></i>
                                                    <!--AAA Cambiar por total de seguidos-->
                                                    <h2 class="counter_num">230</h2>
                                                    <p>SEGUITS</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            
            </section>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Portfolio Section Begin -->
    <div class="portfolio spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <a style="position:absolute; left: 0; top: -20px; color: white; text-align: center;" href="">
                        <i style="font-size: 40px;" class="fa-solid fa-dollar-sign"></i><br>
                        DONACIÓ</a>
                    <ul class="portfolio__filter">
                        <li onClick="ul(4)" class="active" >TOTS</li>
                        <li onClick="ul(0)" >IMATGES</li>
                        <li onClick="ul(1)" >VIDEOS</li>
                        <li onClick="ul(2)" >DOCUMENTS</li>
                        <li onClick="ul(3)" >EXECUTABLES</li>
                    </ul>
                    <a style="position:absolute; right: 0; top: -20px; color: white; text-align: center;" href="">
                    <i style="font-size: 40px;" class="fa-regular fa-message"></i><br>
                    MISSATGE</a>

                </div>
            </div>
            <div class="row portfolio__gallery" style="perspective: 3000px; perspective-origin: 50% 50%; height: auto!important; width: auto!important; transition: ease 0s, width 600ms ease 0s;">
                <!-- AQUII -->
            <?php
            include("connect.php");
            $sql_tots = "SELECT * FROM todos ORDER BY data, hora"; // USAR UNION!!!
            $result_tots = mysqli_query($con,$sql_tots) or exit(mysqli_error($con).$sql_tots);

            while($res = mysqli_fetch_array($result_tots)) {
                if($res["tipus"]=="i"){ ?>
                    <div class="col-lg-4 col-md-6 col-sm-6 mix pub_img">   
                    <div class="portfolio__item imgg">
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
                            <span><?php echo $res["hora"] ?> / <?php echo $res["data"] ?> </span>
                        </div>
                    </div>
                    
                </div>
                <?php
                }if($res["tipus"]=="d"){ ?>
                    <div class="col-lg-4 col-md-6 col-sm-6 mix pub_img">   
                    <div class="portfolio__item docc">
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
                    <div class="portfolio__item vidd">
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
                    <div class="portfolio__item exee">
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
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="pagination__option">
                        <a href="#" class="arrow__pagination left__arrow"><span class="arrow_left"></span> Prev</a>
                        <a href="#" class="number__pagination">1</a>
                        <a href="#" class="number__pagination">2</a>
                        <a href="#" class="arrow__pagination right__arrow">Next <span class="arrow_right"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Section End -->
    

    <?php 
    include("finestra_xat.php");
    include("footer.php"); 
    ?>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    
    <script src="https://kit.fontawesome.com/5e3da6c98d.js" crossorigin="anonymous"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/portfolio.js"></script>
    <script>
        window.onload=activar("men_portfolio");
    </script>
    <script src="js/menu.js"></script>

</body>

</html>