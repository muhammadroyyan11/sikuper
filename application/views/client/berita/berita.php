<section class="hero-wrap hero-wrap-2" style="background-image: url('<?= base_url() ?>assets/uploads/bg.jpeg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate pb-0 text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="<?= site_url('home') ?>">Home <i class="fa fa-chevron-right"></i></a></span> <span>Berita <i class="fa fa-chevron-right"></i></span></p>
                <h1 class="mb-3 bread">Berita</h1>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                <h2 class="mb-2">Berita</h2>
            </div>
        </div>
        <div class="row">
            <?php foreach ($berita->result() as $key => $data) {
                $dateMasuk = new DateTime($data->tgl_berita); ?>
                <div class="col-md-4">
                    <div class="property-wrap ftco-animate">
                        <a href="<?= site_url('berita/read/' . $data->id_berita) ?>" class="img" style="background-image: url(<?= base_url() ?>assets/uploads/Berita/<?= $data->foto_berita ?>);">
                        </a>
                        <div class="text">
                            <h3><a href="#"><?= $data->judul ?></a></h3>
                            <span class="location"><?= character_limiter($data->isi, 75) ?></span><br>
                            <a href="<?= base_url("berita/read/$data->id_berita") ?>" class="s-text20">
                                Continue Reading
                                <i class="fa fa-long-arrow-right m-l-8" aria-hidden="true"></i>
                            </a>
                            <div class="list-team d-flex align-items-center mt-2 pt-2 border-top">
                                <span class="location">By Admin</span>
                                <span class="text-right"><?= $dateMasuk->format('d F Y') ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="row mt-5">
            <div class="col text-center">
                <?= $this->pagination->create_links(); ?>
            </div>
        </div>
    </div>
</section>