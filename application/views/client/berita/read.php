<section class="hero-wrap hero-wrap-2" style="background-image: url('<?= base_url() ?>assets/client/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate pb-0 text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="<?= site_url('home') ?>">Home <i class="fa fa-chevron-right"></i></a></span> <span>Berita <i class="fa fa-chevron-right"></i></span></p>
                <h1 class="mb-3 bread">Baca Berita</h1>
            </div>
        </div>
    </div>
</section><br><br>

<!-- content page -->
<section class="bgwhite p-t-60 p-b-25">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-9 p-b-80">
                <div class="p-r-50 p-r-0-lg">
                    <div class="p-b-40">
                        <div class="blog-detail-img wrap-pic-w">
                            <img src="<?= base_url() ?>assets/uploads/berita/<?= $row->foto_berita ?>" alt="IMG-BLOG">
                        </div>

                        <div class="blog-detail-txt p-t-33">
                            <h4 class="p-b-11 m-text24">
                                <?= $row->judul ?>
                            </h4>

                            <div class="s-text8 flex-w flex-m p-b-21">
                                <span>
                                    By admin
                                    <span class="m-l-3 m-r-6">|</span>
                                </span>

                                <span>
                                    <?php
                                    $dateMasuk = new DateTime($row->tgl_berita);
                                    ?>
                                    <?= $dateMasuk->format('d F Y') ?>
                                    <span class="m-l-3 m-r-6">|</span>
                                </span>


                                <!-- <span>
										8 Comments
									</span> -->
                            </div>
                            <br>
                            <div>

                                <span style="padding-top: 33px;">
                                    <?= $row->isi ?>

                                </span>
                                <br>
                                <!-- <span>
										8 Comments
									</span> -->
                            </div>


                            <!-- <p class="p-b-25">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed turpis sed lorem dignissim vulputate nec cursus ante. Nunc sit amet tempor magna. Donec eros sem, porta eget leo et, varius eleifend mauris. Donec eu leo congue, faucibus quam eu, viverra mauris. Nulla consectetur lorem mi, at scelerisque metus hendrerit vitae. Proin vel magna vel neque porta ultricies non eget mauris. Suspendisse potenti.
								</p>
								<p class="p-b-25">
									Aliquam faucibus scelerisque placerat. Vestibulum vel libero eu nulla varius pretium eget eu magna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean dictum faucibus felis, ac vestibulum risus mollis in. Phasellus neque dolor, euismod vitae auctor eget, dignissim a felis. Etiam malesuada elit a nibh aliquam, placerat ultricies nibh dictum. Nam ut egestas velit. Pellentesque viverra tincidunt tellus. Etiam cursus, ligula id vehicula cursus, turpis mauris facilisis massa, eget tincidunt est purus et odio. Nam quis luctus libero, non posuere velit. Ut eu varius diam, eu euismod elit. Donec efficitur, neque eu consectetur consectetur, dui sem consectetur felis, vitae rutrum risus urna vel arcu. Aliquam semper ullamcorper laoreet. Sed arcu lectus, fermentum imperdiet purus eu, ornare ornare libero.
								</p> -->

                        </div>


                    </div>
                </div>
            </div>


        </div>
    </div>
</section>