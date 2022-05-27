<section class="hero-wrap hero-wrap-2" style="background-image: url('<?= base_url() ?>assets/client/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate pb-0 text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="<?= site_url('home') ?>">Home <i class="fa fa-chevron-right"></i></a></span> <span>Tentang Kami <i class="fa fa-chevron-right"></i></span></p>
                <h1 class="mb-3 bread">Tentang Kami</h1>
            </div>
        </div>
    </div>
</section><br><br>

<section class="ftco-section ftco-no-pb ftco-no-pt">
    <div class="container">
        <div class="row">
            <div class="col-md-7 order-md-last d-flex align-items-stretch">
                <!-- <div class="img w-100 img-2 mr-md-2" style="background-image: url(<?= base_url() ?>assets/client/images/about.jpg);"></div> -->
                <div class="img w-100 img-2 ml-md-2"><img src="<?= base_url() ?>assets/uploads/tentang/ <?= $tentang->foto ?>" alt=""></div>
            </div>
            <div class="col-md-5 wrap-about py-md-5 ftco-animate">
                <div class="heading-section pr-md-5">
                    <h1 class="mb-4"><b>Tentang DISPERKIM</b></h1>
                    <div align="justify"><?= $tentang->tentang_kami ?></div>
                </div><br>
                <div class="heading-section pr-md-5">
                    <h1 class="mb-4"><b>SIKUPER</b></h1>
                    <div align="justify">SIKUPER atau Sistem Informasi Kumpulan Perumahan merupakan sebuah website yang membantu masyarakat dalam mencari perumahan serta memudahkan masyarakat untuk melakukan konsultasi secara online</div>
                </div>
            </div>
        </div>
    </div>
</section><br>