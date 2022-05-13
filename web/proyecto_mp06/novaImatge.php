<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Videograph Template">
    <meta name="keywords" content="Videograph, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nova imatge</title>

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
        .switch {
            position: relative;
            display: block;
            vertical-align: top;
            width: 100px;
            height: 30px;
            padding: 3px;
            margin: 0 10px 10px 0;
            background: linear-gradient(to bottom, #fca965, #ffd207 25px);
            background-image: -webkit-linear-gradient(top, #fca965, #ffd207 25px);
            border-radius: 18px;
            box-shadow: inset 0 -1px white, inset 0 1px 1px rgba(0, 0, 0, 0.05);
            cursor: pointer;
            box-sizing:content-box;
        }
        .switch-input {
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0;
            box-sizing:content-box;
        }
        .switch-label {
            position: relative;
            display: block;
            height: inherit;
            font-size: 10px;
            text-transform: uppercase;
            background: #fde372;
            border-radius: inherit;
            box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.12), inset 0 0 2px rgba(0, 0, 0, 0.15);
            box-sizing:content-box;
        }
        .switch-label:before, .switch-label:after {
            position: absolute;
            top: 50%;
            margin-top: -.5em;
            line-height: 1;
            -webkit-transition: inherit;
            -moz-transition: inherit;
            -o-transition: inherit;
            transition: inherit;
            box-sizing:content-box;
        }
        .switch-label:before {
            content: attr(data-off);
            right: 11px;
            font-size: 16px;
            text-shadow: 0 1px rgba(255, 255, 255, 0.5);
            color: white;
        }
        .switch-label:after {
            content: attr(data-on);
            left: 11px;
            font-size: 16px;
            text-shadow: 0 1px rgba(0, 0, 0, 0.2);
            opacity: 0;
            color: white;
        }
        .switch-input:checked ~ .switch-label {
            background: #E1B42B;
            box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.15), inset 0 0 3px rgba(0, 0, 0, 0.2);
        }
        .switch-input:checked ~ .switch-label:before {
            opacity: 0;
        }
        .switch-input:checked ~ .switch-label:after {
            opacity: 1;
        }
        .switch-handle {
            position: absolute;
            top: 4px;
            left: 4px;
            width: 28px;
            height: 28px;
            background: linear-gradient(to bottom, #FFFFFF 40%, #f0f0f0);
            background-image: -webkit-linear-gradient(top, #FFFFFF 40%, #f0f0f0);
            border-radius: 100%;
            box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.2);
        }
        .switch-handle:before {
            content: "";
            position: absolute;
            top: 50%;
            left: 50%;
            margin: -6px 0 0 -6px;
            width: 12px;
            height: 12px;
            background: linear-gradient(to bottom, #eeeeee, #FFFFFF);
            background-image: -webkit-linear-gradient(top, #eeeeee, #FFFFFF);
            border-radius: 6px;
            box-shadow: inset 0 1px rgba(0, 0, 0, 0.02);
        }
        .switch-input:checked ~ .switch-handle {
            left: 74px;
            box-shadow: -1px 1px 5px rgba(0, 0, 0, 0.2);
        }
        
        /* Transition
        ========================== */
        .switch-label, .switch-handle {
            transition: All 0.3s ease;
            -webkit-transition: All 0.3s ease;
            -moz-transition: All 0.3s ease;
            -o-transition: All 0.3s ease;
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
                            <h3>Nova imatge</h3>
                            <form id="form_imatge">
                                <div class="row">  
                                    <div class="col-lg-6 col-md-6">
                                        <input type="text" name="nom" autocomplete="off" placeholder="Nom de la imatge">
                                        <textarea name="descripcio" placeholder="Descripció"></textarea>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <input type="text" name="ubicacio" autocomplete="off" placeholder="Ubicació">
                                        <label>
                                            Té contingut d'adults?
                                            <label class="switch">
                                                <input name="adult" class="switch-input" type="checkbox" />
                                                <span class="switch-label" data-on="Sí" data-off="No"></span> 
                                                <span class="switch-handle"></span> 
                                            </label>
                                        </label>
                                    </div>
                                    <button type="button" class="site-btn" onclick="pujarImatge(document.querySelector('#form_imatge').elements)">Pujar imatge</button>
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