
<?php 
$index = 0;
$apropos = 0;
$informatiques = 0;
$services = 0;
$contact = 0;
$communication= 0;
$distribution= 0;

 ?>




<!doctype html>
<html lang="zxx">
    <head>
        <!-- Required Meta Tags -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- Bootstrap CSS --> 
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!-- Owl Carousel CSS --> 
        <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <!-- Animate Min CSS -->
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <!-- Boxicons CSS -->
        <link rel="stylesheet" href="assets/css/boxicons.min.css">
        <!-- Meanmenu CSS -->
        <link rel="stylesheet" href="assets/css/meanmenu.css">
        <!-- Nice Select CSS -->
        <link rel="stylesheet" href="assets/css/nice-select.min.css">
        <!-- Style CSS -->
        <link rel="stylesheet" href="assets/css/style5.css">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="assets/css/responsive.css">


        <!-- Title -->
        <title>G-EXPERT</title>
        
        <!-- Favicon -->
        <link rel="icon" type="image/jpg" href="assets/img/favicon.jpg">
    </head>

    <body>

        <!-- Preloader -->
        <div class="preloader">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="pre-img">
                        <img src="assets/img/logo.jpg" alt="Logo">
                    </div>
                    <div class="spinner">
                        <div class="circle1"></div>
                        <div class="circle2"></div>
                        <div class="circle3"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Preloader -->

        <!-- Start Navbar Area -->
        <div class="navbar-area">
            <!-- Menu For Mobile Device -->
            <div class="mobile-nav">
                <a href="index.html" class="logo">
                    <img src="assets/img/imgExpert/logo1.png" alt="Logo">
                </a>
            </div>

            <!-- Menu For Desktop Device -->
            <div class="main-nav">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light ">
                        <a class="navbar-brand" href="index.html">
                            <img src="assets/img/imgExpert/logo1.jpg" alt="Logo">
                        </a>
                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav m-auto">
                                <li class="nav-item">
                                    <a href="index.php" class="nav-link " <?=$index?> >
                                        Accueil 
                                        
                                    </a>
                                    
                                </li>
<!--                                 <li class="nav-item">
                                    <a href="apropos.php" class="nav-link" <?=$apropos?>>
                                        Apropos
                                    </a>
                                </li> -->
                                <li class="nav-item">
                                    <a href="#" class="nav-link" <?= $informatiques?>>
                                        Informatiques 
                                    </a>

                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="vente.php" class="nav-link">
                                               Vente de materiels Informatique
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="crea_logi.php" class="nav-link">
                                               Creaction de logiciels informatiques
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="cable&reso.php" class="nav-link">
                                                Cable & Reseaux
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="maintenance.php" class="nav-link">
                                                Maintenance informatique
                                            </a>

                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a href="#" class="nav-link" <?= $distribution?>>
                                        Distribution 
                                    </a>

                                    <ul class="dropdown-menu">

                                        <li class="nav-item">
                                            <a href="elec_mena.php" class="nav-link">
                                                Electro menager 
                                            </a>
                                        </li>

                                         <li class="nav-item">
                                            <a href="fourniture.php" class="nav-link">
                                                Fourniture bureau
                                            </a>
                                        </li>

                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a href="#" class="nav-link" <?= $communication?>>
                                        Communication 
                                    </a>
                                    <ul class="dropdown-menu">

                                        <li class="nav-item">
                                            <a href="location_copieur.php" class="nav-link">
                                                Confection d'accessoires
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="location_voiture.php" class="nav-link">
                                                Impression numérique 
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="location_voiture.php" class="nav-link">
                                                Sérigraphie
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="location_voiture.php" class="nav-link">
                                                Branding
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link" <?= $services?>>
                                        Services 
                                    </a>
                                    <ul class="dropdown-menu">
                                         
                                        <li class="nav-item">
                                            <a href="location_copieur.php" class="nav-link">
                                                Location de copieur 
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="location_voiture.php" class="nav-link">
                                                Location de vehicule 
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                    
                                <li class="nav-item">
                                    <a href="contact.php" class="nav-link"<?= $contact?> >
                                        Contact
                                    </a>
                                </li>
                            </ul>

                            <div class="cart-area">
                                <a href="cart_produit.php">
                                    <i class='bx bx-cart'></i>
                                    <span id="panier">0</span>
                                </a>
                            </div>

                            <div class="menu-btn">
                                <a href="tel:+225 07 09 883 051" class="phone-btn">
                                    <i class='bx bxs-phone'></i>
                                    +225 07 09 13 13 95
                                </a>
                            </div>
                        </div>




                    </nav>
                </div>
            </div>
        </div>
        <!-- End Navbar Area -->