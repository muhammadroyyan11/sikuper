<section class="hero-wrap hero-wrap-2" style="background-image: url('<?= base_url() ?>assets/uploads/bg.jpeg');" data-stellar-background-ratio="0.5">
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
        <div class="form-inline">
            <span class="mr-md-auto"> </span>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong"><span class="bi bi-filter"></span> Filter</button>
        </div>
        <div class="row">
            <?php foreach ($perumahan as $key => $data) { ?>
                <div class="col-md-4">
                    <div class="property-wrap ftco-animate">
                        <a href="<?= site_url('perumahan/read/' . $data->id_perumahan) ?>" class="img" style="background-image: url(<?= base_url() ?>assets/uploads/perumahan/<?= $data->foto_perumahan ?>);">
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
                <?= $this->pagination->create_links(); ?>
            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true" data-backdrop="true" data-keyboard="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Filter Perumahan</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="GET">
                <div class="modal-body">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Balikpapan Kota
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="" value="" id="baltim">
                        <label class="form-check-label" for="baltim">
                            Balikpapan Timur
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="" value="" id="balbar">
                        <label class="form-check-label" for="balbar">
                            Balikpapan Barat
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="" value="" id="balteng">
                        <label class="form-check-label" for="balteng">
                            Balikpapan Tengah
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="" value="" id="balsel">
                        <label class="form-check-label" for="balsel">
                            Balikpapan Selatan
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="" value="" id="balut">
                        <label class="form-check-label" for="balut">
                            Balikpapan Utara
                        </label>
                    </div>
                </div>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">filter</button>
            </div>
        </div>
    </div>
</div>