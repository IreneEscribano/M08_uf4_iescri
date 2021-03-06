<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Videograph Template">
    <meta name="keywords" content="Videograph, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nou document</title>

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
    <style>
        ::-webkit-calendar-picker-indicator {
            filter: invert(1);
            cursor: pointer;
        }
        label {
            color: white;
        }
    </style>
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
    <?php include ("menu.php"); ?>

    </header>
    <!-- Header End -->

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option spad set-bg" data-setbg="img/fondo_m06.png">
        <div class="container">
            <div class="row">
                <section class="contact spad">
                    <div class="container">
                        <div class="contact__form">
                            <br><br>
                            <h3>Nou document</h3>
                            <form id="form_document">
                                <div class="row">  
                                    <div class="col-lg-6 col-md-6">
                                        <input type="text" name="nom" autocomplete="off" placeholder="Nom del document">
                                        <textarea name="descripcio" placeholder="Descripci??"></textarea>
                                        <input type="text" name="tipus_document" autocomplete="off" placeholder="Tipus de document">
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <input type="text" name="ubicacio" autocomplete="off" placeholder="Ubicaci??">
                                        <div class="col-lg-4 col-md-4">
                                            <label>N??mero de p??gines</label>
                                            <input type="number" name="paginas" min="1" value="1">
                                        </div>
                                    </div>
                                    <button type="button" class="site-btn" onclick="pujarDocument(document.querySelector('#form_document').elements)">Pujar document</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <?php 
    include("finestra_xat.php");
    include("footer.php"); 
    ?>

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
        window.onload=activar("men_services");
    </script>
    <script src="js/menu.js"></script>
</body>

</html>