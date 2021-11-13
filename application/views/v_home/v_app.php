<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Bang Ambo University - <?php echo $title; ?> </title>

    <!-- Favicon -->
    <link rel="icon" href="<?php echo base_url(); ?>assets/academy/img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/academy/style.css">

</head>

<body>
    <!-- ##### Preloader ##### -->
    <div id="preloader">
        <i class="circle-preloader"></i>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 h-100">
                        <div class="header-content h-100 d-flex align-items-center justify-content-between">
                            <div class="academy-logo">
                                <a href="index.html"><img src="<?php echo base_url(); ?>assets/academy/img/core-img/logo.png" alt=""></a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="academy-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="academyNav">

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="<?php echo base_url('/'); ?>">Home</a></li>
                                    
                                    <li><a href="#">Pengumuman</a>
                                        <div class="megamenu">
                                            <div class="single-mega cn-col-4">
                                            </div>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="<?php echo base_url('home/alur_pendaftaran'); ?>">Alur Pendaftaran</a></li>
                                                <li><a href="<?php echo base_url('home/formasi_asisten'); ?>">Formasi Asisten</a></li>
                                                <li><a href="<?php echo base_url('home/passing_grade'); ?>">Passing Grade</a></li>
                                            </ul>
                                            <div class="single-mega cn-col-4">
                                                <img src="<?php echo base_url(); ?>assets/academy/img/bg-img/bg-4.png" alt="">
                                            </div>
                                        </div>
                                    </li>
                                    <li><a href="<?php echo base_url('home/about_us'); ?>">About Us</a></li>
                                    <li><a href="<?php echo base_url('registrasi'); ?>">Registrasi</a></li>
                                    <li><a href="<?php echo base_url('login'); ?>">Login</a></li>
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>

                        <!-- Calling Info -->
                        <div class="calling-info">
                            <div class="call-center">
                                <a href="tel:0214450668"><i class="icon-telephone-2"></i> <span>(021) 4450668, 4450669</span></a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Conten ##### -->
    <?php 
        if ($page == 'home') {
            include 'home.php';
        }
        elseif ($page == 'formasi_asisten'){
            include 'pengumuman/formasi_asisten.php';
        }
        elseif ($page == 'alur_pendaftaran'){
            include 'pengumuman/alur_pendaftaran.php';
        }
        elseif ($page == 'passing_grade'){
            include 'pengumuman/passing_grade.php';
        }
        elseif ($page == 'registrasi'){
            include 'registrasi.php';
        }
        elseif ($page == 'login'){
            include 'login.php';
        }
        elseif ($page == 'about_us'){
            include 'about_us.php';
        }
     ?>
    <!-- ##### Conten End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="main-footer-area section-padding-100-0">
            <div class="container">
                <div class="row">
                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="footer-widget mb-100">
                            <div class="widget-title">
                                <a href="#"><img src="<?php echo base_url(); ?>assets/academy/img/core-img/logo2.png" alt=""></a>
                            </div>
                            <p>Bang Ambo University merupakan salah satu Perguruan Tinggi unggul di indonesia.  </p>
                            <p>Terakreditasi oleh BAN PT</p>
                            <div class="footer-social-info">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-behance"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="footer-widget mb-100">
                            <div class="widget-title">
                                <h6>Usefull Links</h6>
                            </div>
                            <nav>
                                <ul class="useful-links">
                                    <li><a href="<?php echo base_url('/'); ?>">Home</a></li>
                                    <li><a href="<?php echo base_url('home/formasi_asisten'); ?>">Formasi Asisten</a></li>
                                    <li><a href="<?php echo base_url('home/alur_pendaftaran'); ?>">Alur Pendaftaran</a></li>
                                    <li><a href="<?php echo base_url('home/passing_grade'); ?>">Passing Grade</a></li>
                                    <li><a href="<?php echo base_url('home/about_us'); ?>">About Us</a></li>
                                    <li><a href="<?php echo base_url('registrasi'); ?>">Registrasi</a></li>
                                    <li><a href="<?php echo base_url('login'); ?>">Login</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="footer-widget mb-100">
                            <div class="widget-title">
                                <h6>Gallery</h6> 
                            </div>
                            <div class="gallery-list d-flex justify-content-between flex-wrap">
                                <a href="<?php echo base_url(); ?>assets/academy/img/bg-img/gallery1.jpg" class="gallery-img" title="Gallery Image 1"><img src="<?php echo base_url(); ?>assets/academy/img/bg-img/gallery1.jpg" alt=""></a>
                                <a href="<?php echo base_url(); ?>assets/academy/img/bg-img/gallery2.jpg" class="gallery-img" title="Gallery Image 2"><img src="<?php echo base_url(); ?>assets/academy/img/bg-img/gallery2.jpg" alt=""></a>
                                <a href="<?php echo base_url(); ?>assets/academy/img/bg-img/gallery3.jpg" class="gallery-img" title="Gallery Image 3"><img src="<?php echo base_url(); ?>assets/academy/img/bg-img/gallery3.jpg" alt=""></a>
                                <a href="<?php echo base_url(); ?>assets/academy/img/bg-img/gallery4.jpg" class="gallery-img" title="Gallery Image 4"><img src="<?php echo base_url(); ?>assets/academy/img/bg-img/gallery4.jpg" alt=""></a>
                                <a href="<?php echo base_url(); ?>assets/academy/img/bg-img/gallery5.jpg" class="gallery-img" title="Gallery Image 5"><img src="<?php echo base_url(); ?>assets/academy/img/bg-img/gallery5.jpg" alt=""></a>
                                <a href="<?php echo base_url(); ?>assets/academy/img/bg-img/gallery6.jpg" class="gallery-img" title="Gallery Image 6"><img src="<?php echo base_url(); ?>assets/academy/img/bg-img/gallery6.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="footer-widget mb-100">
                            <div class="widget-title">
                                <h6>Contact</h6>
                            </div>
                            <div class="single-contact d-flex mb-30">
                                <i class="icon-placeholder"></i>
                                <p>Lubuk Basung, Kab. Agam, Sumatera Barat</p>
                            </div>
                            <div class="single-contact d-flex mb-30">
                                <i class="icon-telephone-1"></i>
                                <p>Office: (021) 4450668, 4450669</p>
                            </div>
                            <div class="single-contact d-flex">
                                <i class="icon-contract"></i>
                                <p>rektorat@bangambouniveesity.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> Bang Ambo University All rights reserved 
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="<?php echo base_url(); ?>assets/academy/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="<?php echo base_url(); ?>assets/academy/js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="<?php echo base_url(); ?>assets/academy/js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="<?php echo base_url(); ?>assets/academy/js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="<?php echo base_url(); ?>assets/academy/js/active.js"></script>
</body>

</html>