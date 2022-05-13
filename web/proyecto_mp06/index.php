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
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
        <div id="mySidebar">
            <i class="fa fa-times" onclick="document.querySelector('#mySidebar').classList.remove('open');"></i>
            <br>
            <div class="contact__form">
                <div id="formulari_login">
                    <h3>Inicia sessió</h3>
                    <form class="form">
                        <input type="text" id="usuari_login" placeholder="Usuari" onkeydown="teclat(event, 'login')" autocomplete="off">
                        <input type="password" id="contrasenya_login" onkeydown="teclat(event, 'login')" placeholder="Contrasenya">
                        <button type="button" id="submit" class="site-btn" onkeydown="teclat(event, 'login')" onclick="validarUsuari()">Validar-se</button>
                    </form>
                    <a style="cursor: pointer" onclick="canviarForm()">O no tens compte?</a>
                </div>
                <div id="formulari_registre">
                    <h3>Crea el teu compte</h3>
                    <form class="form">
                        <input type="text" id="nom_usuari_registre" placeholder="Nom complet" onkeydown="teclat(event, 'registre')" autocomplete="off">
                        <input type="text" id="usuari_registre" placeholder="Usuari" onkeydown="teclat(event, 'registre')" autocomplete="off">
                        <input type="password" id="contrasenya_registre" onkeydown="teclat(event, 'registre')" placeholder="Contrasenya">
                        <button type="button" id="submit" class="site-btn" onkeydown="teclat(event, 'registre')" onclick="enregistrarUsuari()">Enregistrar-se</button>
                    </form>
                    <a style="cursor: pointer" onclick="canviarForm()">O ja tens compte?</a>
                </div>
            </div>
        </div>
        <?php include ("menu.php"); ?>
    </header>
    <!-- Header End -->

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="hero__slider owl-carousel">
            <div class="hero__item set-bg" data-setbg="img/fondo_m06.png">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <h2 class="title">Infinitol.io</h2>
                                <span class="subtitle">
                                    Una plataforma per <strong class="estil_artistes">Artistes!</strong>
                                </span>
                                <a class="primary-btn" onclick="document.querySelector('#mySidebar').classList.add('open');">Comença!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero__item set-bg" data-setbg="img/fondo_m06.png">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <h2>Monta el teu portfolio!</h2>
                                <span>
                                    Tens treballs amb diferents formats, i vols tenirlos tots guardats en un mateix lloc? A Infinitol.io pots pujar arxius de tot tipus per a poder presentar a amics, empreses, i poder donar-te a conéixer! Comença a compartir la teva creativitat!
                                </span>
                                <a class="primary-btn" onclick="document.querySelector('#mySidebar').classList.add('open');">Comença!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero__item set-bg" data-setbg="img/fondo_m06.png">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <h2>El teu esforç té valor!</h2>
                                <span>
                                    A Infinitol.io et donem la possibilitat de possar preu al teu treball. Tens moltes opcions de negoci com; iniciar una subasta, un pool, o inclós parlar directament amb possibles clients interessats amb les teves creacions. Comença a posar valor a la teva creativitat!
                                </span>
                                
                                <a class="primary-btn" onclick="document.querySelector('#mySidebar').classList.add('open');">Comença!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <?php
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
        window.onload=activar("men_home");
        let fLogin = document.querySelector("#formulari_login");
        let fRegistre = document.querySelector("#formulari_registre");
        let canviat = false;
        function canviarForm() {
            if (canviat == false) {
                fLogin.style.display = "none";
                fRegistre.style.display = "block";
                canviat = true;
            } else {
                fLogin.style.display = "block";
                fRegistre.style.display = "none";
                canviat = false;
            }
        }
    </script>
    <script src="js/menu.js"></script>
</body>

</html>