<section class="hero-wrap" style="background-image: url('<?= base_url() ?>assets/uploads/bg.jpeg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center">
            <div class="col-lg-7 col-md-6 ftco-animate d-flex align-items-end">
                <div class="text">
                    <b>
                        <h1 class="mb-4">Dinas Perumahan dan <br>Permukiman Kota Balikpapan</h1>
                    </b>
                    <p><a href="<?= site_url('perumahan') ?>" class="btn btn-primary py-3 px-4">Lihat Perumahan</a></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pb ftco-no-pt search-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="search-wrap-1 ftco-animate p-4">
                    <form action="#" class="search-property-1">
                        <div class="row">
                            <div class="col-lg align-items-end">
                                <div class="form-group">
                                    <center>
                                        <h1 style="color: white;">Layanan Konsultasi dan Rekomendasi Perumahan</h1>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pb ftco-no-pt">
    <div class="container">
        <div class="row">
            <div class="col-md-7 order-md-last d-flex align-items-stretch">
                <!-- <div class="img w-100 img-2 mr-md-2" style="background-image: url(<?= base_url() ?>assets/client/images/about.jpg);"></div> -->
                <div class="img w-100 img-2 ml-md-2" style="background-image: url(<?= base_url() ?>assets/uploads/tes.jpeg);"></div>
            </div>
            <div class="col-md-5 wrap-about py-md-5 ftco-animate">
                <div class="heading-section pr-md-5">
                    <h3 class="mb-4">Apa itu <b>Layanan dan Rekomendasi Perumahan ?</b></h3>

                    <p><b>Pemberian Layanan Konsultasi dan Rekomendasi Perumahan</b> adalah salah satu sasaran dalam mencapai Visi Misi Dinas Perumahan dan Pemukiman Kota Balikpapan. Pelayanan konsultasi dan rekomendasi perumahan diberikan untuk masyarakat asli kota Balikpapan dan masyarakat pendatang kota Balikpapan.</p>
                    <p>Pemberian layanan konsultasi dan rekomendasi perumahan dibuat agar mempermudah seluruh golongan masyarakat dalam mendapatkan perumahan yang layak untuk dihuni, <b>terutama untuk MBR(Masyarakat Berpenghasilan Rendah). </b>Dengan adanya layanan ini, diharapkan masyarakat dapat mandiri dalam menaikkan kualitas perumahan hingga masyarakat mendapatkan kehidupan dengan perumahan yang layak dihuni serta lingkungan yanga aman dan sehat.</p>
                </div>
            </div>
        </div>
    </div>
</section><br>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                <h2 class="mb-2">Perumahan</h2>
                <span class="subheading"><a href="<?= site_url('perumahan') ?>">Lihat semua</a></span>
            </div>
        </div>
        <div class="row ftco-animate">
            <div class="col-md-12">
                <div class="carousel-properties owl-carousel">
                    <?php foreach ($perumahan->result() as $key => $data) { ?>
                        <div class="item">
                            <div class="property-wrap ftco-animate">
                                <a href="#" class="block-20 img" style="background-image: url(<?= base_url() ?>assets/uploads/perumahan/<?= $data->foto_perumahan ?>);">
                                </a>
                                <div class="text">
                                    <ul class="property_list">
                                        <li><span class="flaticon-floor-plan"></span><?= $data->luas_tanah ?> m2</li>
                                    </ul>
                                    <h3><a href="#"><?= $data->nama_perumahan ?></a></h3>
                                    <span class="location"><?= $data->nama_jenis ?></span>
                                    <span class="location"><?= $data->fasilitas  ?></span>
                                    <a href="#" class="d-flex align-items-center justify-content-center btn-custom">
                                        <span class="fa fa-link"></span>
                                    </a>
                                    <hr>
                                    <span class="location">Balikpapan, Kalimantan Timur</span>
                                    <span class="text-right"></span>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pt">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <h2>Berita Terbaru</h2>
                <span class="subheading"><a href="<?= site_url('berita') ?>">Lihat semua</a></span>
            </div>
        </div>
        <div class="row d-flex">
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
    </div>
</section>