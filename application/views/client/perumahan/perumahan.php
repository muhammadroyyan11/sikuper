<section class="hero-wrap hero-wrap-2" style="background-image: url('<?= base_url() ?>assets/client/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate pb-0 text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Properties <i class="fa fa-chevron-right"></i></span></p>
                <h1 class="mb-3 bread">Perumahan</h1>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section goto-here">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                <h2 class="mb-2">Perumahan</h2>
            </div>
        </div>
        <div class="row">
            <?php foreach ($perumahan->result() as $key => $data) { ?>
                <div class="col-md-4">
                    <div class="property-wrap ftco-animate">
                        <a href="<?= site_url('perumahan/read/' . $data->id_perumahan)?>" class="img" style="background-image: url(<?= base_url() ?>assets/uploads/perumahan/<?= $data->foto_perumahan ?>);">
                        </a>
                        <div class="text">
                            <ul class="property_list">
                                <li><span class="flaticon-bed"></span>3</li>
                                <li><span class="flaticon-bathtub"></span>2</li>
                                <li><span class="flaticon-floor-plan"></span>1,878 sqft</li>
                            </ul>
                            <h3><a href="#"><?= $data->nama_perumahan ?></a></h3>
                            <span class="location"><?= $data->nama_jenis ?></span>
                            <span class="location"><?= $data->fasilitas  ?></span>
                            <a href="#" class="d-flex align-items-center justify-content-center btn-custom">
                                <span class="fa fa-link"></span>
                            </a>
                            <div class="list-team d-flex align-items-center mt-2 pt-2 border-top">
                                <div class="d-flex align-items-center">
                                    <div class="img" style="background-image: url(images/person_1.jpg);"></div>
                                    <h3 class="ml-2">John Dorf</h3>
                                </div>
                                <span class="text-right">2 weeks ago</span>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="row mt-5">
            <div class="col text-center">
                <div class="block-27">
                    <ul>
                        <li><a href="#">&lt;</a></li>
                        <li class="active"><span>1</span></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">&gt;</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>