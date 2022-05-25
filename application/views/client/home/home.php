<section class="hero-wrap" style="background-image: url('<?= base_url() ?>assets/client/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center">
            <div class="col-lg-7 col-md-6 ftco-animate d-flex align-items-end">
                <div class="text">
                    <b>
                        <h1 class="mb-4">Dinas Perumahan dan <br>Permukiman Kota Balikpapan</h1>
                    </b>
                    <p><a href="#" class="btn btn-primary py-3 px-4">View all properties</a></p>
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
                <div class="img w-100 img-2 ml-md-2" style="background-image: url(<?= base_url() ?>assets/client/images/about-2.jpg);"></div>
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
                <span class="subheading"><a href="#">Lihat semua</a></span>
            </div>
        </div>
        <div class="row ftco-animate">
            <div class="col-md-12">
                <div class="carousel-properties owl-carousel">
                    <?php foreach ($perumahan->result() as $key => $data) { ?>
                        <div class="item">
                            <div class="property-wrap ftco-animate">
                                <a href="#" class="img" style="background-image: url(<?= base_url() ?>assets/uploads/perumahan/<?= $data->foto_perumahan ?>);">
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
                                    </a><hr>
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
        <div class="row justify-content-center">
            <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                <span class="subheading">Properties</span>
                <h2 class="mb-2">Properties for this Cities</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="#" class="search-place img" style="background-image: url(<?= base_url() ?>assets/client/images/place-1.jpg);">
                    <div class="desc">
                        <h3><span>Miami</span></h3>
                        <span>24 Properties</span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section services-section bg-darken">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center heading-section heading-section-white ftco-animate">
                <span class="subheading">Work flow</span>
                <h2 class="mb-3">How it works</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services services-2">
                    <div class="media-body py-md-4 text-center">
                        <div class="icon mb-1 d-flex align-items-center justify-content-center"><span>01</span>
                            <img src="images/blob.svg" alt="">
                        </div>
                        <h3>Evaluate Property</h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services services-2">
                    <div class="media-body py-md-4 text-center">
                        <div class="icon mb-1 d-flex align-items-center justify-content-center"><span>02</span>
                            <img src="images/blob.svg" alt="">
                        </div>
                        <h3>Meet Your Agent</h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services services-2">
                    <div class="media-body py-md-4 text-center">
                        <div class="icon mb-1 d-flex align-items-center justify-content-center"><span>03</span>
                            <img src="images/blob.svg" alt="">
                        </div>
                        <h3>Close the Deal</h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services services-2">
                    <div class="media-body py-md-4 text-center">
                        <div class="icon mb-1 d-flex align-items-center justify-content-center"><span>04</span>
                            <img src="images/blob.svg" alt="">
                        </div>
                        <h3>Have Your Property</h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                    </div>
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
                <span class="subheading">Blog</span>
            </div>
        </div>
        <div class="row d-flex">
            <div class="col-md-3 d-flex ftco-animate">
                <div class="blog-entry justify-content-end">
                    <div class="text">
                        <a href="blog-single.html" class="block-20 img" style="background-image: url('<?= base_url() ?>assets/client/images/image_1.jpg');">
                        </a>
                        <div class="meta mb-3">
                            <div><a href="#">June 01, 2020</a></div>
                            <div><a href="#">Admin</a></div>

                        </div>
                        <h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex ftco-animate">
                <div class="blog-entry justify-content-end">
                    <div class="text">
                        <a href="blog-single.html" class="block-20 img" style="background-image: url('<?= base_url() ?>assets/client/images/image_2.jpg');">
                        </a>
                        <div class="meta mb-3">
                            <div><a href="#">June 01, 2020</a></div>
                            <div><a href="#">Admin</a></div>

                        </div>
                        <h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex ftco-animate">
                <div class="blog-entry justify-content-end">
                    <div class="text">
                        <a href="blog-single.html" class="block-20 img" style="background-image: url('<?= base_url() ?>assets/client/images/image_3.jpg');">
                        </a>
                        <div class="meta mb-3">
                            <div><a href="#">June 01, 2020</a></div>
                            <div><a href="#">Admin</a></div>

                        </div>
                        <h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex ftco-animate">
                <div class="blog-entry justify-content-end">
                    <div class="text">
                        <a href="blog-single.html" class="block-20 img" style="background-image: url('<?= base_url() ?>assets/client/images/image_4.jpg');">
                        </a>
                        <div class="meta mb-3">
                            <div><a href="#">June 01, 2020</a></div>
                            <div><a href="#">Admin</a></div>
                        </div>
                        <h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>