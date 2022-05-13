<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Videograph Template">
    <meta name="keywords" content="Videograph, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Infinitol.io</title>

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
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header">
        <div class="ctrl">
            <span class="notification animateOpen"></span>
        </div>
        <?php include("menu.php"); ?>
    </header>
    <!-- Header End -->

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option spad set-bg" data-setbg="img/fondo_m06.png">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <div class="footer__option__item" style="max-width: 50%; margin: 0 auto; background-color: #100028;">
                            <form action="javascript:void(0);">
                                <input id="buscador" type="text" placeholder="Busca el que vulguis" style="border: none;" autocomplete="off" onkeydown="teclatBuscador(event)">
                                <button type="button" onclick="buscarDades('<?php echo $ses_nickname ?>')"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        <br>
                        <section class="portfolio spad">
                            <div class="container">
                                <div id="resultats"></div>
                                <div id="inici" class="row">
                                    <div class="col-lg-12">
                                        <ul class="portfolio__filter">
                                            <li class="active" onclick="contingutInici('usuaris','<?php echo $ses_nickname ?>')">Usuaris</li>
                                            <li onclick="contingutInici('publicacions','<?php echo $ses_nickname ?>')">Publicacions</li>
                                        </ul>
                                    </div>
                                </div>
                                <div id="contingut" class="row portfolio__gallery"></div>
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
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <?php 
    include("finestra_xat.php");
    include("footer.php"); 
    ?>

    <!-- Footer Section End -->

    <!-- Js Plugins -->
    
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    <script>
        window.onload = contingutInici('usuaris','<?php echo $ses_nickname ?>');
        function teclatBuscador(event) {
            if (event.key === "Enter") buscarDades('<?php echo $ses_nickname ?>');
        }
    </script>
        <script>
        window.onload=activar("men_blog");
    </script>
    <script src="js/menu.js"></script>
</body>

</html>