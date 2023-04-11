<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Logiciel de Gestion</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/css/slicknav.css">
    <link rel="stylesheet" href="../assets/css/flaticon.css">
    <link rel="stylesheet" href="../assets/css/progressbar_barfiller.css">
    <link rel="stylesheet" href="../assets/css/gijgo.css">
    <link rel="stylesheet" href="../assets/css/animate.min.css">
    <link rel="stylesheet" href="../assets/css/animated-headline.css">
    <link rel="stylesheet" href="../assets/css/magnific-popup.css">
    <link rel="stylesheet" href="../assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="../assets/css/themify-icons.css">
    <link rel="stylesheet" href="../assets/css/slick.css">
    <link rel="stylesheet" href="../assets/css/nice-select.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        #modif{
            padding: 20px;
            background-color: orange;
            margin-left: 12%;
            
        }
        #supp{
            padding: 20px;
            background-color: red;
            margin-left : 15%;
        }
    </style>
</head>
<body class="full-wrapper">
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="../assets/img/logo/loder.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start-->
    <header>
        <!-- Header Start -->
        <div class="header-area ">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="menu-wrapper d-flex align-items-center justify-content-between">
                        <div class="header-left d-flex align-items-center">
                            <!-- Logo -->
                            <div class="logo">
                                <h1>Gestion</h1>
                            </div>
                            <!-- Main-menu -->
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="#">Information</a></li> 
                                        <li><a href="<?= site_url('home/voir_plancompta'); ?>">Plan Comptable</a></li>
                                        <li><a href="<?= site_url('home/exercice'); ?>">Exercice</a></li>
                                        <li><a href="<?= site_url('home/devise'); ?>">Devise</a></li>
                                    </ul>
                                </nav>
                            </div>   
                        </div>
                        <div class="header-right1 d-flex align-items-center">
                            <!-- Search Box -->
                            <div class="search d-none d-md-block">
                                <ul class="d-flex align-items-center">
                                    <li class="mr-15">
                                        <div class="nav-search search-switch">
                                            <i class="ti-search"></i>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="card-stor">   
                                            <img src="../assets/img/gallery/card.svg" alt="">
                                            <a href="<?= site_url('home/deconnect'); ?>"><span>Deconnexion</span></a> 
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    <!-- header end -->
    <main>
    <!--? New Arrival Start -->
    <div class="new-arrival">
        <div class="container">
            <!-- Section tittle -->
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8 col-md-10">
                    <div class="section-tittle mb-60 text-center wow fadeInUp" data-wow-duration="2s" data-wow-delay=".2s">
                        <b>Information d'entreprise</b>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="label" for="name">Nom : </label>
                                <span><b><?php echo $info['nom']; ?></b></span>
                            </div>
						</div>
						
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="label" for="name">Objet :</label>
                                <span><b><?php echo $info['objet']; ?></b></span>
                            </div>
						</div>
						<div class="col-md-12">
                            <div class="form-group">
                                <label class="label" for="name">Siege :</label>
                                <span><b><?php echo $info['siege']; ?></b></span>
                            </div>
						</div>
						<div class="col-md-12">
                            <div class="form-group">
                                <label class="label" for="name">Adresse d'exploitation :</label>
                                <span><b><?php echo $info['Adresse_d_exploitation']; ?></b></span>
                            </div>
						</div>
						<div class="col-md-12">
                            <div class="form-group">
                                <label class="label" for="name">Nom de dirigeant :</label>
                                <span><b><?php echo $info['nom_dirigeant']; ?></b></span>
                            </div>
						</div>
						<div class="col-md-12">
                            <div class="form-group">
                                <label class="label" for="name">Date de creation :</label>
                                <span><b><?php echo $info['date_creation']; ?></b></span>
                            </div>
						</div>
						<div class="col-md-12">
                            <div class="form-group">
                                <label class="label" for="name">Numero d'identification :</label>
                                <span><b><?php echo $info['numero_identification']; ?></b></span>
                            </div>
						</div>
						<div class="col-md-12">
                            <div class="form-group">
                                <label class="label" for="name">Numero statistique :</label>
                                <span><b><?php echo $info['numero_statistique']; ?></b></span>
                            </div>
						</div>
						<div class="col-md-12">
                            <div class="form-group">
                                <label class="label" for="name">Numero de registre commerce :</label>
                                <span><b><?php echo $info['numero_registre_commerce']; ?></b></span>
                            </div>
						</div>
						<div class="col-md-12">
                            <div class="form-group">
                                <label class="label" for="name">Status :</label>
                                <span><b><?php echo $info['status']; ?></b></span>
                            </div>
						</div>			
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <a href="<?php echo site_url("societe/updateEntre?id=".$info['id']);?>" class="genric-btn warning-border large">Modifer</a>
                </div>
                <div class="col-md-6">
                   
                    <a href="<?php echo site_url("societe/deleteEntrep?id=".$info['id']);?>" class="genric-btn danger-border large">Supprimer</a>
                    <p></p>
                </div>    
            </div>
        </div>
    </div>
    </main>
<!--? Search model Begin -->
<div class="search-model-box">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-btn">+</div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Searching key.....">
        </form>
    </div>
</div>
<!-- Search model end -->
<!-- JS here -->
<!-- Jquery, Popper, Bootstrap -->
<script src="../assets/js/vendor/modernizr-3.5.0.min.js"></script>
<script src="../assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="../assets/js/popper.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>

<!-- Slick-slider , Owl-Carousel ,slick-nav -->
<script src="../assets/js/owl.carousel.min.js"></script>
<script src="../assets/js/slick.min.js"></script>
<script src="../assets/js/jquery.slicknav.min.js"></script>

<!-- One Page, Animated-HeadLin, Date Picker -->
<script src="../assets/js/wow.min.js"></script>
<script src="../assets/js/animated.headline.js"></script>
<script src="../assets/js/jquery.magnific-popup.js"></script>
<script src="../assets/js/gijgo.min.js"></script>

<!-- Nice-select, sticky,Progress -->
<script src="../assets/js/jquery.nice-select.min.js"></script>
<script src="../assets/js/jquery.sticky.js"></script>
<script src="../assets/js/jquery.barfiller.js"></script>

<!-- counter , waypoint,Hover Direction -->
<script src="../assets/js/jquery.counterup.min.js"></script>
<script src="../assets/js/waypoints.min.js"></script>
<script src="../assets/js/jquery.countdown.min.js"></script>
<script src="../assets/js/hover-direction-snake.min.js"></script>

<!-- contact js -->
<script src="../assets/js/contact.js"></script>
<script src="../assets/js/jquery.form.js"></script>
<script src="../assets/js/jquery.validate.min.js"></script>
<script src="../assets/js/mail-script.js"></script>
<script src="../assets/js/jquery.ajaxchimp.min.js"></script>

<!-- Jquery Plugins, main Jquery -->	
<script src="../assets/js/plugins.js"></script>
<script src="../assets/js/main.js"></script>

</body>
</html>