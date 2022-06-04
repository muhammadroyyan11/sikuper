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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    

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
                        <li class="nav-item pull-right"><a href="<?= site_url('user') ?>" class="nav-link"><?= userdata('nama') ?> <i class="fa fa-user-circle-o"></i></a></li>
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
            <div class="row mb-12">
                <div class="col-md-5">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">SIKUPER</h2>
                        <p align="justify"><b>SIKUPER atau Sistem Informasi Kumpulan Perumahan</b> merupakan sebuah website yang membantu masyarakat dalam mencari perumahan serta memudahkan masyarakat untuk melakukan konsultasi secara online</p><br>
                        <p>Phone : 0542-874091</p>
                        <p>Email : disperkim.balikpapan@gmail.com</p>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="ftco-footer-widget mb-4 ml-md-4">
                        <h2 class="ftco-heading-2">Menu</h2>
                        <ul class="list-unstyled">
                            <li><a href="<?= site_url('home') ?>"><span class="fa fa-chevron-right mr-2"></span>Beranda</a></li>
                            <li><a href="<?= site_url('tentang') ?>"><span class="fa fa-chevron-right mr-2"></span>Tentang Kami</a></li>
                            <li><a href="<?= site_url('perumahan') ?>"><span class="fa fa-chevron-right mr-2"></span>Perumahan</a></li>
                            <li><a href="<?= site_url('berita') ?>"><span class="fa fa-chevron-right mr-2"></span>Berita</a></li>
                            <li><a href="<?= site_url('kontak') ?>"><span class="fa fa-chevron-right mr-2"></span>Kontak</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Pranala Luar</h2>
                        <ul class="list-unstyled">
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>About Us</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Press</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Contact</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Careers</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">

                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved
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

    <script src="<?= base_url() ?>assets/client/js/search.js"></script>

    <?php if (is_user()) { ?>
        <!--Start of Tawk.to Script-->
        <script type="text/javascript">
            var Tawk_API = Tawk_API || {},
                Tawk_LoadStart = new Date();
            (function() {
                var s1 = document.createElement("script"),
                    s0 = document.getElementsByTagName("script")[0];
                s1.async = true;
                s1.src = 'https://embed.tawk.to/62909c62b0d10b6f3e745058/1g42e5ovo';
                s1.charset = 'UTF-8';
                s1.setAttribute('crossorigin', '*');
                s0.parentNode.insertBefore(s1, s0);
            })();
        </script>
        <!--End of Tawk.to Script-->

        <script>
            var url = 'https://wati-integration-service.clare.ai/ShopifyWidget/shopifyWidget.js?1600';
            var s = document.createElement('script');
            s.type = 'text/javascript';
            s.async = true;
            s.src = url;
            var options = {
                "enabled": true,
                "chatButtonSetting": {
                    "backgroundColor": "#4dc247",
                    "ctaText": "",
                    "borderRadius": "25",
                    "marginLeft": "0",
                    "marginBottom": "25",
                    "marginRight": "100",
                    "position": "right"
                },
                "brandSetting": {
                    "brandName": "SIKUPER",
                    "brandSubTitle": "Typically replies within a day",
                    "brandImg": "https://ibb.co/QjJj8Hb",
                    "welcomeText": "Hi,\nAda yang bisa saya bantu?",
                    "messageText": "Hello, Saya ingin mengetahui Informasi lebih lanjut terkait perumahan",
                    "backgroundColor": "#0a5f54",
                    "ctaText": "Mulai Chat",
                    "borderRadius": "100",
                    "autoShow": false,
                    "phoneNumber": "62852228282728"
                }
            };
            s.onload = function() {
                CreateWhatsappChatWidget(options);
            };
            var x = document.getElementsByTagName('script')[0];
            x.parentNode.insertBefore(s, x);
        </script>

    <?php } ?>


    <!--End of Tawk.to Script-->

</body>

</html>