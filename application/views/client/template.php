<!DOCTYPE html>
<html lang="en">

<head>
    <title>SIKUPER - <?= $title ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="<?= base_url() ?>assets/client/css/animate.css">

    <link rel="stylesheet" href="<?= base_url() ?>assets/client/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/client/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/client/css/magnific-popup.css">

    <link rel="stylesheet" href="<?= base_url() ?>assets/client/css/flaticon.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/client/css/style.css">

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.html">SIKUPER</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> MENU
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li <?= $this->uri->segment(1) == 'home' ? 'class="nav-item active"' : 'class="nav-item"' ?>><a href="<?= site_url('home') ?>" class="nav-link">Home</a></li>

                    <li <?= $this->uri->segment(1) == 'tentang' ? 'class="nav-item active"' : 'class="nav-item"' ?>><a href="<?= site_url('tentang') ?>" class="nav-link">Tentang Kami</a></li>

                    <li <?= $this->uri->segment(1) == 'berita' ? 'class="nav-item active"' : 'class="nav-item"' ?>><a href="<?= site_url('berita') ?>" class="nav-link">Berita</a></li>
                    <li <?= $this->uri->segment(1) == 'perumahan' ? 'class="nav-item active"' : 'class="nav-item"' ?>><a href="<?= site_url('perumahan') ?>" class="nav-link">Perumahan</a></li>
                    <li <?= $this->uri->segment(1) == 'kontak' ? 'class="nav-item active"' : 'class="nav-item"' ?>><a href="<?= site_url('kontak') ?>" class="nav-link">Kontak</a></li>
                    <?php
                    if ($this->session->has_userdata('login_session')) { ?>
                        <li class="nav-item pull-right"><a href="<?= site_url('auth/logout') ?>" class="nav-link"><?= userdata('nama') ?> <i class="fa fa-user-circle-o"></i></a></li>
                    <?php } else { ?>
                        <li class="nav-item pull-right"><a href="<?= site_url('auth') ?>" class="nav-link">Login</a></li>
                    <?php }
                    ?>

                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    <?= $contents ?>

    <footer class="ftco-footer ftco-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Ecoverde</h2>
                        <p>Far far away, behind the word mountains, far from the countries.</p>
                        <ul class="ftco-footer-social list-unstyled mt-5">
                            <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-4">
                        <h2 class="ftco-heading-2">Community</h2>
                        <ul class="list-unstyled">
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Search Properties</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>For Agents</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Reviews</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>FAQs</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-4">
                        <h2 class="ftco-heading-2">About Us</h2>
                        <ul class="list-unstyled">
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Our Story</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Meet the team</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Careers</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Company</h2>
                        <ul class="list-unstyled">
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>About Us</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Press</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Contact</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Careers</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Have a Questions?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon fa fa-map"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
                                <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+2 392 3929 210</span></a></li>
                                <li><a href="#"><span class="icon fa fa-envelope pr-4"></span><span class="text">info@yourdomain.com</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">

                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </footer>



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
        </svg></div>


    <script src="<?= base_url() ?>assets/client/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/client/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="<?= base_url() ?>assets/client/js/popper.min.js"></script>
    <script src="<?= base_url() ?>assets/client/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>assets/client/js/jquery.easing.1.3.js"></script>
    <script src="<?= base_url() ?>assets/client/js/jquery.waypoints.min.js"></script>
    <script src="<?= base_url() ?>assets/client/js/jquery.stellar.min.js"></script>
    <script src="<?= base_url() ?>assets/client/js/owl.carousel.min.js"></script>
    <script src="<?= base_url() ?>assets/client/js/jquery.magnific-popup.min.js"></script>
    <script src="<?= base_url() ?>assets/client/js/jquery.animateNumber.min.js"></script>
    <script src="<?= base_url() ?>assets/client/js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="<?= base_url() ?>assets/client/js/google-map.js"></script>
    <script src="<?= base_url() ?>assets/client/js/main.js"></script>

    <!--Start of Tawk.to Script-->
    <?php 
    if ($this->session->has_userdata('login_session')) {
        if (is_user()) { ?>
            <script type="text/javascript">
                var Tawk_API = Tawk_API || {},
                    Tawk_LoadStart = new Date();
                (function() {
                    var s1 = document.createElement("script"),
                        s0 = document.getElementsByTagName("script")[0];
                    s1.async = true;
                    s1.src = 'https://embed.tawk=to/62909c62b0d10b6f3e745058/1g42e5ovo';
                    s1.charset = 'UTF-8';
                    s1.setAttribute('crossorigin', '*');
                    s0.parentNode.insertBefore(s1, s0);
                })();
            </script>
        <?php } ?>
    <?php } ?>



    <!--End of Tawk.to Script-->

</body>

</html>