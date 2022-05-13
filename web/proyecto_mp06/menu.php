<div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="./index.php"><img src="img/logo.png" alt="" width="130px"></a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="header__nav__option">
                        <nav class="header__nav__menu mobile-menu">
                            <ul>
                            <?php
                                session_start();
                                $ses_nickname = $_SESSION["nickname"];
                            
                                if(!isset($ses_nickname)) {
                                    ?>
                                    <li class="men men_home active"><a href="./index.php">Home</a></li>
                                    <li class="men men_about"><a href="./about.php">About</a></li>
                                    <li class="men_services"><a href="./services.php">Services</a></li>
                                    <?php
                                }else{
                                    ?>
                                    <li class="men men_home active"><a href="./index.php">Home</a></li>
                                    <li class="men men_blog"><a href="./blog.php">Inici</a></li>
                                    <li class="men men_portfolio"><a href="./portfolio.php">Portfolio</a></li>
                                    <li class="men men_services"><a href="./services.php">Services</a></li>
                                    <li class="men men_about"><a href="./about.php">About</a></li>
                                    <li class="men men_profile"><a href="./profile.php">Perfil</a></li>
                                    <?php
                                }
                                ?>

                            </ul>
                        </nav>
                        <div class="header__nav__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
        <script src="js/menu.js"></script>