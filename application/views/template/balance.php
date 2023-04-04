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
    <style>
        #ecrit{
            font-size : 20px;
            padding : 3%;
            height : 10%;
        }
        #ce{
            text-align:center;
        }
        #dr{
            text-align:right;
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
                                <h1><a href="#">Gestion</a></h1>
                            </div>
                            <!-- Main-menu -->
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="<?= site_url('home/index'); ?>">Home</a></li> 
                                        <li><a href="<?= site_url('ecriture/retour'); ?>">Journal</a></li>
                                        <li><a href="<?= site_url('ecriture/grandLivre'); ?>">Grand Livre</a></li>
                                        <li><a href="<?= site_url('ecriture/VoirBalance'); ?>">Balance</a></li>
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
                                            <a href="<?= site_url('home/deconnect'); ?>"><span>Deconnexion</span></button></a> 
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
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
    
            <!-- Section tittle -->
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8 col-md-10">
                    <div class="col-12">
                        <h2 class="contact-title text-center">Balance des comptes</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <h2>Nom d'entreprise : <b><?php echo $info['nom']; ?></b></h2>
                    <h2>Exercice : <b><?php echo $info['exercice']; ?></b>
                    <h2>Periode de : <b><?php echo $info['debut']; ?></b> à <b><?php echo $info['fin']; ?></b></h2>
                    <h2>Tenue de compte : <b> Ar</b></h2> 
                    <table border="2" class="table table-light">
                    <thead>
                        <tr>
                            <th rowspan="2" id="ce">Numero de compte</th>
                            <th rowspan="2" id="ce">Intitulé des comptes</th>
                            <th colspan="2" id="ce">Mouvements</th>
                            <th colspan="2" id="ce">Soldes</th>
                        </tr>
                        <tr>
                            <th id="ce">Debit</th>
                            <th id="ce">Credit</th>
                            <th id="ce">Debit</th>
                            <th id="ce">Credit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for($i = 0 ; $i < count($balance) ; $i++) { ?>
                        <tr>
                            <td><?php echo $balance[$i]['compte']; ?></td>
                            <td><?php echo $balance[$i]['intitule']; ?></td>
                            <td id="dr"><?php echo $balance[$i]['totaldebit']; ?></td>
                            <td id="dr"><?php echo $balance[$i]['totalcredit']; ?></td>
                            <?php 
                                $solde_d = $balance[$i]['soldedebiteur'];
                                $solde_c = $balance[$i]['soldecrediteur'];
                                if($solde_d < 0){
                                    $solde_d = null;
                                }
                                if($solde_c < 0){
                                    $solde_c = null;
                                }
                             ?>
                            <td id="dr"><?php echo $solde_d; ?></td>
                            <td id="dr"><?php echo $solde_c; ?></td>
                        </tr>
                        <?php } ?>
                         <tr>
                            <td colspan="2" style="text-align:right"><h1><b>Total</b></h1></td>
                            <td id="dr"><h1><b><?php echo $total['debit']; ?></b></h1></td>
                            <td id="dr"><h1><b><?php echo $total['credit']; ?></b></h1></td>
                            <td id="dr"><h1><b><?php echo $total['soldedebit']; ?></b></h1></td>
                            <td id="dr"><h1><b><?php echo $total['soldecredit']; ?></b></h1></td>
                         </tr>
                    
                    </tbody>
                    </table>
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